@props(['icon', 'text'])
<div
    class="flex items-center space-x-2 rounded-full border border-[#1E1E2C] bg-[#181826] px-[8px] py-[4px] font-bold uppercase text-white">
    <x-dynamic-component component="ui.icons.{{ $icon }}" class="h-5 w-5" />
    <span class="text-[12px] tracking-wider text-[#C3C3D1]">{{ $text }}</span>
</div>
