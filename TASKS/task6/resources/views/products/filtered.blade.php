@extends('layouts.app')

@section('title', 'Premium Products | E-Commerce Dashboard')
@section('page_title', 'Premium Products')
@section('page_subtitle', 'Showing products with a price greater than $100.')

@section('header_actions')
    <div class="bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-xs px-4 py-1.5 rounded-full font-bold uppercase tracking-wider shadow-[0_0_15px_rgba(6,182,212,0.1)] self-start sm:self-center">Price > $100.00</div>
@endsection

@section('content')
    @if($products->isEmpty())
        <div class="flex-grow flex items-center justify-center">
            <div class="border border-dashed border-slate-800 rounded-3xl p-12 text-center max-w-md w-full bg-slate-900/20 backdrop-blur-sm">
                <span class="text-5xl mb-4 block">💎</span>
                <h2 class="text-xl font-bold text-white mb-1.5">No Premium Products</h2>
                <p class="text-sm text-slate-400">None of the products currently in the database match the filter criteria (Price > $100.00).</p>
            </div>
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($products as $product)
                <div class="group bg-slate-900/40 border border-slate-800/80 rounded-2xl p-6 flex flex-col justify-between backdrop-blur-sm transition-all duration-300 hover:-translate-y-1 hover:border-slate-700/80 hover:shadow-[0_10px_30px_rgba(139,92,246,0.06)]">
                    <div class="mb-5">
                        <span class="text-[10px] font-bold text-violet-400 uppercase tracking-wider mb-2 block">Catalog ID #{{ $product->id }}</span>
                        <h2 class="text-lg font-bold text-white leading-tight mb-2 group-hover:text-violet-300 transition-colors">{{ $product->name }}</h2>
                        <p class="text-sm text-slate-400 leading-relaxed line-clamp-3">{{ $product->desc }}</p>
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-slate-800/60">
                        <div>
                            <span class="text-[10px] font-bold text-slate-500 uppercase tracking-wider block">Price</span>
                            <div class="text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-violet-400 to-cyan-400">
                                ${{ number_format($product->price, 2) }}
                            </div>
                        </div>
                        <span class="text-xs font-semibold px-2.5 py-1 bg-slate-800 text-slate-300 rounded-lg group-hover:bg-violet-600 group-hover:text-white transition-colors duration-300 cursor-default">View Details</span>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
