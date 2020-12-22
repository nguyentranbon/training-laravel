<template>
    <app-layout>
        <div>
            <h1 class="mb-8 font-bold text-3xl">Category</h1>
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-1 ...">
                    <div class="mt-4">
                        <h4 class="text-gray-600">Model Form</h4>
                        
                        <div class="mt-4">
                            <div class="max-w-sm w-full bg-white shadow-md rounded-md overflow-hidden border">
                                <form>
                                    <div class="flex justify-between items-center px-5 py-3 text-gray-700 border-b">
                                        <h3 class="text-sm">Add Category</h3>
                                    </div>
                                    
                                    <div class="px-5 py-6 bg-gray-200 text-gray-700 border-b">
                                        <label class="text-xs">Name</label>
                                        
                                        <div class="mt-2 relative rounded-md shadow-sm">
                                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-600">
                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                                                </svg>
                                            </span>
                                            
                                            <input type="text" class="form-input w-full px-12 py-2 appearance-none rounded-md focus:border-indigo-600" />
                                        </div>
                                        <label class="text-xs">Parent Category</label>
                                        
                                        <div class="mt-2 relative rounded-md shadow-sm">
                                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-600">
                                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                                </svg>
                                            </span> 
                                            
                                            <select class="form-input w-full px-12 py-2 appearance-none rounded-md focus:border-indigo-600">
                                                <option>Yes</option>
                                                <option>No</option>
                                                <option>Maybe</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="flex justify-between items-center px-5 py-3">
                                        <button class="px-3 py-1 text-gray-700 text-sm rounded-md bg-gray-200 hover:bg-gray-300 focus:outline-none">
                                            Cancel
                                        </button>
                                        <button class="px-3 py-1 bg-indigo-600 text-white rounded-md text-sm hover:bg-indigo-500 focus:outline-none">
                                            Save
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 ...">7</div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    
    export default {
        components: {
            AppLayout
        , }
    , }
    
</script>
