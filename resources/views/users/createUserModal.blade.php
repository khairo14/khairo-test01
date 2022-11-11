<div x-show="open" class="relative z-10" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true" style="display:none;">
    
    <div x-show="open" 
    x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" 
    x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" 
    x-description="Background backdrop, show/hide based on modal state." 
    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" style="display:none;"></div>
    

    <div class="fixed inset-0 z-10 overflow-y-auto">
    <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
        
        <div x-show="open" 
        x-transition:enter="ease-out duration-300" 
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" 
        x-transition:leave="ease-in duration-200" 
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
        x-description="Modal panel, show/hide based on modal state." 
        class="relative transform overflow-hidden rounded-lg bg-gray-100 px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-3xl sm:p-6" @click.away="open = false" style="display:none;">
            
            {{-- modal content --}}
            <div>
                <div class="space-y-6 sm:space-y-5 ">
                    <div>
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Enter New User Info</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Please Enter UserName correctly - unable to change</p>
                    </div>
                    <div class="space-y-3 sm:space-y-2">
                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Name</label>
                            <div class="mt-1 sm:col-span-2 sm:mt-1">
                                <input type="text" name="name" id="name" autocomplete="name" class="text-center block w-full max-w-lg rounded-sm border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm" autofocus required>
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="last-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Email</label>
                            <div class="mt-1 sm:col-span-2 sm:mt-1">
                                <input type="email" name="email" id="email" autocomplete="email" class="text-center block w-full max-w-lg rounded-sm border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="last-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Username</label>
                            <div class="mt-1 sm:col-span-2 sm:mt-1">
                                <input type="text" name="username" id="username" class="text-center block w-full max-w-lg rounded-sm border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="last-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Password</label>
                            <div class="mt-1 sm:col-span-2 sm:mt-1">
                                <input type="password" name="password" id="password" class="text-center block w-full max-w-lg rounded-sm border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                            </div>
                        </div>
                        
                        <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                            <select id="role" name="role" class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                <option value="1">Admin</option>
                                <option value="2" selected>User</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                
                <div class="mt-5 sm:mt-6 sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3">
                    <button type="button" class="create_user inline-flex w-full justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:col-start-2 sm:text-sm">Create</button>
                    <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:col-start-1 sm:mt-0 sm:text-sm" @click="open = false">Cancel</button>
                </div>
            </div>
        </div>
        
    </div>
    </div>
</div>