<x-ui.modal>
    <div>
        <div class="text-[28px]">Submit your proposal</div>
        <div class="text-[16px] text-[#C3C3D1]">Make your offer in hours that you can contribute with the project.</div>
    </div>
    <div class="flex gap-4">
        <div class="flex w-2/3 flex-col gap-2">
            <label class="text-[14px] text-[#C3C3D1]">E-mail</label>
            <input type="email"
                class="w-full border border-[#1E1E2C] bg-[#1E1E2C] p-2 text-white focus:outline-none focus:ring-0"
                placeholder="Insert your e-mail" />
        </div>
        <div class="flex w-1/3 flex-col gap-2">
            <label class="text-[14px] text-[#C3C3D1]">Hours</label>
            <div class="flex" x-data="{ count: 0 }">
                <button
                    class="bg-[#1E1E2C] px-3 py-2 text-3xl text-[#C3C3D1] transition duration-300 ease-in-out hover:bg-[#313145]"
                    @click="count--">-</button>
                <input type="number"
                    class="w-[40px] border border-[#1E1E2C] bg-[#1E1E2C] py-2 pl-3 font-bold text-white focus:outline-none focus:ring-0 focus:ring-blue-500"
                    x-model="count" />
                <button
                    class="bg-[#1E1E2C] px-3 py-2 text-3xl text-[#C3C3D1] transition duration-300 ease-in-out hover:bg-[#313145]"
                    @click="count++">+</button>
            </div>
        </div>
    </div>
    <div>
        <label for="agree"
            class="flex cursor-pointer items-center gap-2 text-sm font-medium text-neutral-600 dark:text-neutral-300 [&:has(input:checked)]:text-neutral-900 dark:[&:has(input:checked)]:text-white [&:has(input:disabled)]:cursor-not-allowed [&:has(input:disabled)]:opacity-75">
            <div class="relative flex items-center">
                <input id="agree" type="checkbox"
                    class="before:content[''] size-4 peer relative cursor-pointer appearance-none overflow-hidden rounded border border-neutral-300 bg-neutral-50 before:absolute before:inset-0 checked:border-[#5354FD] checked:before:bg-[#5354FD] focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-neutral-800 checked:focus:outline-[#5354FD] active:outline-offset-0 disabled:cursor-not-allowed dark:border-neutral-700 dark:bg-neutral-900 dark:checked:border-[#5354FD] dark:checked:before:bg-[#5354FD] dark:focus:outline-neutral-300 dark:checked:focus:outline-[#5354FD]" />
                <x-ui.icons.check
                    class="size-3 pointer-events-none invisible absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 text-white peer-checked:visible dark:text-white" />
            </div>
            <span class="text-[14px] text-[#8C8C9A]">I agree to the Terms and Privacy Policy.</span>
        </label>
    </div>
    <button
        class="w-full rounded-[4px] bg-[#5354FD] px-8 py-3 font-bold uppercase tracking-wide text-white transition duration-300 ease-in-out hover:bg-[#1f20a6]">
        Submit your proposal
    </button>
    <div class="flex justify-center space-x-2">
        <x-ui.icons.secure class="h-6 w-6 text-[#5354FD]" />
        <span>Your information is secure.</span>
    </div>
</x-ui.modal>
