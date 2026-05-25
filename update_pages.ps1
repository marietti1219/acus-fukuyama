# update_pages.ps1
# includes/header.php と includes/footer.php を各 HTML に適用する
# 実行: Set-Location acus-web; .\update_pages.ps1

$ErrorActionPreference = 'Stop'
$root = Split-Path $MyInvocation.MyCommand.Path

$pages = @(
    @{ File='index.html';  Active='top'    },
    @{ File='menu.html';   Active='menu'   },
    @{ File='staff.html';  Active='staff'  },
    @{ File='access.html'; Active='access' },
    @{ File='faq.html';    Active='faq'    }
)

foreach ($p in $pages) {
    $path = Join-Path $root $p.File
    Write-Host "Processing $($p.File) ..."
    $lines = [System.IO.File]::ReadAllLines($path, [System.Text.Encoding]::UTF8)

    # ── ヘッダー範囲を検出 ──────────────────────────────────────────
    # 開始: <header id="hdr"
    $hdrStart = -1
    for ($i = 0; $i -lt $lines.Length; $i++) {
        if ($lines[$i] -match '<header\s+id="hdr"') { $hdrStart = $i; break }
    }

    # ドロワー末尾 (.drw-line の後の </div></div>)
    $drwLine = -1
    for ($i = $hdrStart; $i -lt $lines.Length; $i++) {
        if ($lines[$i] -match 'drw-line') { $drwLine = $i; break }
    }
    # drw-cta closing </div> と drawer closing </div> の 2つ分を探す
    $closeCount = 0
    $hdrEnd = -1
    for ($i = $drwLine + 1; $i -lt $lines.Length; $i++) {
        if ($lines[$i] -match '^\s*</div>\s*$') {
            $closeCount++
            if ($closeCount -ge 2) { $hdrEnd = $i; break }
        }
    }
    if ($hdrStart -lt 0 -or $hdrEnd -lt 0) {
        Write-Host "  SKIP: header block not found (already converted?)"
        continue
    }

    # ── フッター範囲を検出 ─────────────────────────────────────────
    # 開始: <footer>
    $ftrStart = -1
    for ($i = $hdrEnd; $i -lt $lines.Length; $i++) {
        if ($lines[$i] -match '^\s*<footer>') { $ftrStart = $i; break }
    }

    # 終了: back-top ボタンの </button>
    $btStart = -1
    for ($i = $ftrStart; $i -lt $lines.Length; $i++) {
        if ($lines[$i] -match 'back-top') { $btStart = $i; break }
    }
    $ftrEnd = -1
    for ($i = $btStart; $i -lt $lines.Length; $i++) {
        if ($lines[$i] -match '^\s*</button>') { $ftrEnd = $i; break }
    }
    if ($ftrStart -lt 0 -or $ftrEnd -lt 0) {
        Write-Host "  SKIP: footer block not found (already converted?)"
        continue
    }

    Write-Host "  hdr: $($hdrStart+1)-$($hdrEnd+1)  ftr: $($ftrStart+1)-$($ftrEnd+1)"

    # ── 出力を組み立て ────────────────────────────────────────────
    $result = [System.Collections.Generic.List[string]]::new()

    # head セクション（ヘッダー直前まで）
    for ($i = 0; $i -lt $hdrStart; $i++) { $result.Add($lines[$i]) }

    # PHP include: header
    $result.Add("<?php \`$page_active = '$($p.Active)'; include 'includes/header.php'; ?>")

    # ページ固有コンテンツ（ヘッダー直後〜フッター直前）
    for ($i = $hdrEnd + 1; $i -lt $ftrStart; $i++) { $result.Add($lines[$i]) }

    # PHP include: footer
    $result.Add("<?php include 'includes/footer.php'; ?>")

    # </body></html>（claude-agent ゴミ・旧 sticky-cta・旧 <script> を除去）
    $skip = $false
    for ($i = $ftrEnd + 1; $i -lt $lines.Length; $i++) {
        $l = $lines[$i]
        # claude-agent の巨大 div を除去
        if ($l -match 'claude-agent') { $skip = $true }
        if ($skip) {
            if ($l -match '</div>') { $skip = $false }
            continue
        }
        # 旧 sticky-cta / 旧 script / 旧 back-top ボタンは footer.php に移したので除去
        if ($l -match 'sticky-cta|class="back-top"|back-top.*aria-label') { continue }
        $result.Add($l)
    }

    [System.IO.File]::WriteAllLines($path, $result.ToArray(), (New-Object System.Text.UTF8Encoding $false))
    Write-Host "  Done. ($($result.Count) lines)"
}

Write-Host "`nAll pages updated."
