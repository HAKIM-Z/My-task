@extends('layouts.app')

@section('title', 'Cairo Customers | E-Commerce Dashboard')
@section('page_title', 'Customers in Cairo')
@section('page_subtitle', 'Showing customers located in Cairo.')

@section('header_actions')
    <div class="bg-violet-500/10 border border-violet-500/30 text-violet-300 text-xs px-4 py-1.5 rounded-full font-bold uppercase tracking-wider shadow-[0_0_15px_rgba(139,92,246,0.1)] self-start sm:self-center">City = Cairo</div>
@endsection

@section('content')
    @if($customers->isEmpty())
        <div class="flex-grow flex items-center justify-center">
            <div class="border border-dashed border-slate-800 rounded-3xl p-12 text-center max-w-md w-full bg-slate-900/20 backdrop-blur-sm">
                <span class="text-5xl mb-4 block">📍</span>
                <h2 class="text-xl font-bold text-white mb-1.5">No Customers in Cairo</h2>
                <p class="text-sm text-slate-400">None of the customers currently in the database match the filter criteria (City = Cairo).</p>
            </div>
        </div>
    @else
        <div class="overflow-hidden bg-slate-900/30 border border-slate-800/80 rounded-2xl backdrop-blur-sm">
            <div class="overflow-x-auto">
                <table class="w-full border-collapse text-left">
                    <thead>
                        <tr class="bg-slate-900/50">
                            <th class="px-6 py-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest border-b border-slate-800">ID</th>
                            <th class="px-6 py-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest border-b border-slate-800">Customer Details</th>
                            <th class="px-6 py-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest border-b border-slate-800">Email Address</th>
                            <th class="px-6 py-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest border-b border-slate-800">Phone Number</th>
                            <th class="px-6 py-4 text-[10px] font-bold text-slate-400 uppercase tracking-widest border-b border-slate-800">City</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800/60 pl-0">
                        @foreach($customers as $customer)
                            <tr class="hover:bg-slate-800/30 transition-colors">
                                <td class="px-6 py-4 text-sm font-semibold text-slate-500">#{{ $customer->id }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-9 h-9 rounded-full bg-gradient-to-tr from-violet-600 to-cyan-500 flex items-center justify-center font-bold text-sm text-white shadow-[0_2px_10px_rgba(139,92,246,0.15)]">
                                            {{ strtoupper(substr($customer->name, 0, 1)) }}
                                        </div>
                                        <div>
                                            <div class="text-sm font-bold text-white">{{ $customer->name }}</div>
                                            <div class="text-[10px] text-slate-500 font-semibold uppercase tracking-wider">Registered Member</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-slate-400 font-medium">{{ $customer->email }}</td>
                                <td class="px-6 py-4 text-xs font-mono font-bold tracking-wide text-cyan-400">{{ $customer->phone }}</td>
                                <td class="px-6 py-4">
                                    <span class="inline-block text-xs font-semibold px-3 py-1 rounded-full bg-violet-500/10 border border-violet-500/30 text-violet-300 shadow-[0_0_10px_rgba(139,92,246,0.1)] capitalize">
                                        {{ $customer->city }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
