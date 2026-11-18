<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Peternakan Sejahtera</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f3f5ef] text-[#263126] antialiased">
    <div class="min-h-screen lg:flex">
        <aside class="fixed inset-y-0 left-0 z-20 hidden w-64 flex-col border-r border-[#dde3d7] bg-[#f8faf6] px-5 py-6 lg:flex">
            <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-2">
                <span class="grid h-11 w-11 place-items-center rounded-xl bg-[#2f7d32] text-white shadow-sm">
                    <svg viewBox="0 0 24 24" class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path d="M12 21V10m0 0C8 10 5.5 7.5 5 4c4.5.2 7 2.6 7 6Zm0 4c4 0 6.5-2.5 7-6-4.5.2-7 2.6-7 6Z"/>
                    </svg>
                </span>
                <span>
                    <strong class="block text-[15px] leading-tight">Peternakan</strong>
                    <strong class="block text-[15px] leading-tight">Sejahtera</strong>
                </span>
            </a>

            <nav class="mt-10 space-y-2 text-sm font-semibold">
                <a href="#" class="flex items-center gap-3 rounded-lg bg-[#dfebd9] px-4 py-3 text-[#2f672f]" aria-current="page">
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>
                    Dashboard
                </a>
                <a href="#" class="flex items-center gap-3 rounded-lg px-4 py-3 text-[#6d776b] hover:bg-[#edf1e9]"><svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 21h18M5 21V8l7-4 7 4v13M9 21v-6h6v6"/></svg>Kandang</a>
                <a href="#" class="flex items-center gap-3 rounded-lg px-4 py-3 text-[#6d776b] hover:bg-[#edf1e9]"><svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 12c2.2 0 4-1.8 4-4s-1.8-4-4-4-4 1.8-4 4 1.8 4 4 4Zm-7 8c.7-3.5 3.4-6 7-6s6.3 2.5 7 6"/></svg>Ayam</a>
                <a href="#" class="flex items-center gap-3 rounded-lg px-4 py-3 text-[#6d776b] hover:bg-[#edf1e9]"><svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 6h16v12H4zM8 6V4m8 2V4M4 10h16"/></svg>Pakan</a>
                <a href="#" class="flex items-center gap-3 rounded-lg px-4 py-3 text-[#6d776b] hover:bg-[#edf1e9]"><svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 20V8l8-4 8 4v12M8 20v-7h8v7M2 20h20"/></svg>Stok Pakan</a>
                <a href="#" class="flex items-center gap-3 rounded-lg px-4 py-3 text-[#6d776b] hover:bg-[#edf1e9]"><svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 19V5m0 14h16M7 15l3-3 3 2 5-6"/></svg>Laporan</a>
            </nav>

            <div class="mt-auto border-t border-[#e3e7df] pt-5">
                <button type="button" class="flex w-full items-center gap-3 rounded-lg px-2 py-2 text-left">
                    <span class="grid h-9 w-9 place-items-center rounded-full bg-[#d9a46f] text-sm font-bold text-white">BS</span>
                    <span class="min-w-0 flex-1"><strong class="block text-sm">Budi Santoso</strong><span class="block truncate text-xs text-[#8a9285]">Administrator</span></span>
                    <svg viewBox="0 0 24 24" class="h-4 w-4 text-[#8a9285]" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg>
                </button>
            </div>
        </aside>

        <main class="w-full px-4 py-5 sm:px-6 lg:ml-64 lg:px-8 lg:py-7">
            <header class="mb-7 flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#8a9485]">Ringkasan Peternakan</p>
                    <h1 class="mt-1 text-2xl font-bold tracking-tight text-[#273527] sm:text-3xl">Dashboard</h1>
                </div>
                <button type="button" class="grid h-10 w-10 place-items-center rounded-full border border-[#dde3d7] bg-white text-[#697565] shadow-sm lg:hidden" aria-label="Buka menu">
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
                </button>
            </header>

            <section class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4" aria-label="Ringkasan">
                <article class="rounded-2xl border border-[#e1e6dc] bg-white p-5 shadow-[0_8px_24px_rgba(63,79,54,0.05)]">
                    <div class="flex items-start justify-between">
                        <span class="grid h-11 w-11 place-items-center rounded-xl bg-[#edf4ea] text-[#3f793b]">
                            <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 12c2.2 0 4-1.8 4-4s-1.8-4-4-4-4 1.8-4 4 1.8 4 4 4Zm-7 8c.7-3.5 3.4-6 7-6s6.3 2.5 7 6"/></svg>
                        </span>
                        <span class="rounded-full bg-[#edf6ea] px-2.5 py-1 text-xs font-bold text-[#4c8549]">+4,2%</span>
                    </div>
                    <p class="mt-5 text-sm font-medium text-[#7b8477]">Jumlah Ayam</p>
                    <p class="mt-1 text-3xl font-bold text-[#293729]">{{ number_format($summary['chickenCount'], 0, ',', '.') }}</p>
                    <p class="mt-1 text-xs text-[#9aa194]">Ekor</p>
                </article>

                <article class="rounded-2xl border border-[#e1e6dc] bg-white p-5 shadow-[0_8px_24px_rgba(63,79,54,0.05)]">
                    <div class="flex items-start justify-between">
                        <span class="grid h-11 w-11 place-items-center rounded-xl bg-[#fff3dc] text-[#bd842b]">
                            <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 7h16v12H4zM8 7V4h8v3M4 12h16"/></svg>
                        </span>
                        <span class="rounded-full bg-[#fff7e8] px-2.5 py-1 text-xs font-bold text-[#b17a29]">76%</span>
                    </div>
                    <p class="mt-5 text-sm font-medium text-[#7b8477]">Stok Pakan</p>
                    <p class="mt-1 text-3xl font-bold text-[#293729]">{{ number_format($summary['feedStock'] / 1000, 1, ',', '.') }} <span class="text-xl">ton</span></p>
                    <p class="mt-1 text-xs text-[#9aa194]">Cukup untuk 16 hari</p>
                </article>

                <article class="rounded-2xl border border-[#e1e6dc] bg-white p-5 shadow-[0_8px_24px_rgba(63,79,54,0.05)]">
                    <div class="flex items-start justify-between">
                        <span class="grid h-11 w-11 place-items-center rounded-xl bg-[#eaf4f5] text-[#3b7e82]">
                            <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 3v18M3 12h18"/><circle cx="12" cy="12" r="7"/></svg>
                        </span>
                        <span class="rounded-full bg-[#edf6f3] px-2.5 py-1 text-xs font-bold text-[#4e8174]">Hari ini</span>
                    </div>
                    <p class="mt-5 text-sm font-medium text-[#7b8477]">Pemakaian Harian</p>
                    <p class="mt-1 text-3xl font-bold text-[#293729]">{{ number_format($summary['dailyUsage'], 0, ',', '.') }} <span class="text-xl">kg</span></p>
                    <p class="mt-1 text-xs text-[#9aa194]">Rata-rata 336 gram/ekor</p>
                </article>

                <article class="rounded-2xl border border-[#e1e6dc] bg-[#2f7d32] p-5 text-white shadow-[0_12px_28px_rgba(47,125,50,0.16)]">
                    <div class="flex items-start justify-between">
                        <span class="grid h-11 w-11 place-items-center rounded-xl bg-white/15">
                            <svg viewBox="0 0 24 24" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 8h18M5 8l2 12h10l2-12M8 8V6a4 4 0 0 1 8 0v2"/></svg>
                        </span>
                        <span class="rounded-full bg-white/15 px-2.5 py-1 text-xs font-bold">Bulan ini</span>
                    </div>
                    <p class="mt-5 text-sm font-medium text-white/75">Penghematan Pakan</p>
                    <p class="mt-1 text-3xl font-bold">Rp {{ number_format($summary['feedSavings'] / 1000000, 1, ',', '.') }} jt</p>
                    <p class="mt-1 text-xs text-white/70">Naik 12% dari bulan lalu</p>
                </article>
            </section>

            <section class="mt-5 grid gap-5 xl:grid-cols-[minmax(0,1.65fr)_minmax(300px,.75fr)]">
                <article class="rounded-2xl border border-[#e1e6dc] bg-white p-5 shadow-[0_8px_24px_rgba(63,79,54,0.05)] sm:p-6">
                    <div class="flex flex-wrap items-start justify-between gap-3">
                        <div>
                            <h2 class="text-lg font-bold">Grafik Konsumsi Pakan</h2>
                            <p class="mt-1 text-sm text-[#92998d]">Pemakaian 7 hari terakhir</p>
                        </div>
                        <button type="button" class="flex items-center gap-2 rounded-lg border border-[#dde3d7] px-3 py-2 text-xs font-semibold text-[#687364]">
                            Mingguan
                            <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"><path d="m7 10 5 5 5-5"/></svg>
                        </button>
                    </div>

                    @php
                        $chartWidth = 700;
                        $chartHeight = 270;
                        $left = 54;
                        $right = 18;
                        $top = 16;
                        $bottom = 38;
                        $plotWidth = $chartWidth - $left - $right;
                        $plotHeight = $chartHeight - $top - $bottom;
                        $minValue = 300;
                        $maxValue = 500;
                        $points = collect($consumption)->map(function ($item, $index) use ($consumption, $chartWidth, $left, $plotWidth, $top, $plotHeight, $minValue, $maxValue) {
                            $count = count($consumption);
                            $x = $left + (($plotWidth / ($count - 1)) * $index);
                            $y = $top + $plotHeight - ((($item['value'] - $minValue) / ($maxValue - $minValue)) * $plotHeight);
                            return round($x, 1).','.round($y, 1);
                        })->implode(' ');
                    @endphp

                    <div class="mt-5 w-full overflow-hidden">
                        <svg viewBox="0 0 {{ $chartWidth }} {{ $chartHeight }}" class="h-[270px] w-full" role="img" aria-label="Grafik konsumsi pakan tujuh hari">
                            @foreach ([500, 450, 400, 350, 300] as $value)
                                @php $y = $top + $plotHeight - ((($value - $minValue) / ($maxValue - $minValue)) * $plotHeight); @endphp
                                <line x1="{{ $left }}" y1="{{ $y }}" x2="{{ $chartWidth - $right }}" y2="{{ $y }}" stroke="#edf0e9" stroke-width="1"/>
                                <text x="0" y="{{ $y + 4 }}" fill="#9aa194" font-size="11">{{ $value }} kg</text>
                            @endforeach
                            <defs>
                                <linearGradient id="feedArea" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" stop-color="#63a65a" stop-opacity=".25"/>
                                    <stop offset="100%" stop-color="#63a65a" stop-opacity=".02"/>
                                </linearGradient>
                            </defs>
                            <polygon points="{{ $left }},{{ $chartHeight - $bottom }} {{ $points }} {{ $chartWidth - $right }},{{ $chartHeight - $bottom }}" fill="url(#feedArea)"/>
                            <polyline points="{{ $points }}" fill="none" stroke="#3f843d" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            @foreach ($consumption as $index => $item)
                                @php
                                    $x = $left + (($plotWidth / (count($consumption) - 1)) * $index);
                                    $y = $top + $plotHeight - ((($item['value'] - $minValue) / ($maxValue - $minValue)) * $plotHeight);
                                @endphp
                                <circle cx="{{ $x }}" cy="{{ $y }}" r="4" fill="#fff" stroke="#3f843d" stroke-width="3"/>
                                <text x="{{ $x }}" y="{{ $chartHeight - 10 }}" text-anchor="middle" fill="#7e8779" font-size="12">{{ $item['day'] }}</text>
                            @endforeach
                        </svg>
                    </div>
                </article>

                <div class="grid gap-5">
                    <article class="rounded-2xl border border-[#e1e6dc] bg-white p-5 shadow-[0_8px_24px_rgba(63,79,54,0.05)]">
                        <div class="flex items-center justify-between">
                            <div><h2 class="text-lg font-bold">Stok per Kandang</h2><p class="mt-1 text-sm text-[#92998d]">Persentase kapasitas</p></div>
                            <a href="#" class="text-xs font-bold text-[#39763a]">Lihat semua</a>
                        </div>
                        <div class="mt-6 space-y-5">
                            @foreach ($feedStocks as $stock)
                                <div>
                                    <div class="mb-2 flex items-center justify-between text-sm"><span class="font-semibold">{{ $stock['name'] }}</span><span class="font-bold">{{ $stock['stock'] }}%</span></div>
                                    <div class="h-2 overflow-hidden rounded-full bg-[#edf0e9]"><div class="h-full rounded-full" style="width: {{ $stock['stock'] }}%; background: {{ $stock['color'] }}"></div></div>
                                </div>
                            @endforeach
                        </div>
                    </article>

                    <article class="relative overflow-hidden rounded-2xl bg-[#eef3e8] p-5">
                        <div class="absolute -right-8 -top-8 h-28 w-28 rounded-full border-[18px] border-[#dfe8d5]"></div>
                        <p class="relative text-sm font-semibold text-[#64715f]">Efisiensi Pakan</p>
                        <p class="relative mt-2 text-3xl font-bold text-[#39763a]">18,6%</p>
                        <p class="relative mt-1 max-w-[240px] text-xs leading-5 text-[#7d8877]">Lebih hemat dibandingkan periode penggunaan sebelumnya.</p>
                    </article>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
