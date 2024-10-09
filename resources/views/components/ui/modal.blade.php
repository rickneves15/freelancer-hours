<div x-data="{ showModal: @entangle('modal') }" x-show="showModal">
    <dialog x-ref="modal"
        class="fixed inset-0 z-50 flex w-full max-w-md flex-col gap-6 rounded-lg border border-[#1E1E2C] bg-[#181826] p-8 text-white shadow-lg">
        <div>
            <button class="rounded-md bg-[#1E1E2C] p-[8px] transition duration-300 ease-in-out hover:bg-[#313145]"
                wire:click="$set('modal', false)">
                <x-ui.icons.x class="h-[32px] w-[32px] text-white" />
            </button>
        </div>
        <div class="flex flex-col gap-6">
            {{ $slot }}
        </div>
    </dialog>
    <!-- Background Blur Overlay -->
    <div x-show="showModal" class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm"></div>
</div>
