<template>
    <app-layout>
        <div>
            <h3 class="text-gray-700 text-3xl font-medium">Post</h3>
        </div>
        <div class="py-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-0">
                <button @click="openModel()" class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-blue-700 uppercase transition bg-transparent border-2 border-blue-700 rounded shadow ripple hover:shadow-lg hover:bg-blue-100 focus:outline-none">
                    New Post
                </button>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-5">
                    <table class="table-fixed w-full">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 w-20">ID</th>
                                <th class="px-4 py-2 ">Title</th>
                                <th class="px-4 py-2">Author</th>
                                <th class="px-4 py-2">Category</th>
                                <th class="px-4 py-2">Content</th>
                                <th class="px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="x in posts" :key="x.id">
                                <td class="border px-4 py-2">{{ x.id }}</td>
                                <td class="border px-4 py-2">{{ x.user_id }}</td>
                                <td class="border px-4 py-2">Category</td>
                                <td class="border px-4 py-2">{{ x.title }}</td>
                                <td class="border px-4 py-2">{{ x.content }}</td>
                                <td class="border px-4 py-2 text-center">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

<!---------------form------------->
         <div class="fixed z-10 inset-0 overflow-y-auto duration-400 ease-in-out" v-if="isOpen">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                
                <div class="fixed inset-0 transition-opacity">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                    <form @submit.prevent="addPost">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <h3 class="text-gray-700 text-3xl font-medium">{{ formTitle }}</h3>
                            <div class="pt-3">
                                <label class="text-xs">Title</label>
                                <div class="mt-2 relative rounded-md shadow-sm">
                                    <input type="text" v-model="post.title" class="form-input w-full py-2 appearance-none rounded-md focus:border-indigo-600" />
                                </div>
                                <label class="text-xs">Category</label>
                                <div class="mt-2">
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox" checked>
                                            <span class="ml-2">Option 1</span>
                                        </label>
                                    </div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox">
                                        <span class="ml-2">Option 2</span>
                                    </label>
                                </div>
                                <label class="text-xs">Content</label>
                                <div class="mt-2 relative rounded-md shadow-sm">
                                    <textarea v-model="post.content" class="form-textarea w-full py-2 appearance-none rounded-md focus:border-indigo-600" rows="3" placeholder="Enter some long form content."></textarea>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button type="submit" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5" >
                                    Save
                                </button>
                            </span>
                            <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                <button @click="closeForm()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                    Cancel
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>


<form @submit.prevent="addBon">
    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="pt-3">
            <label class="text-xs">Title</label>
            <div class="mt-2 relative rounded-md shadow-sm">
                <input type="text" v-model="bon.title" class="form-input w-full py-2 appearance-none rounded-md focus:border-indigo-600" />
            </div>
        </div>
        <button type="submit" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5" >
            Save
        </button>
    </div>
</form>




<!---------------END/form------------->
    </app-layout>
</template>
 
<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Dashboard from '@/Jetstream/Dashboard'
    

    export default {
        components: {
            AppLayout,
        },

        data(){
            return{
                isOpen: false,
                editedIndex: -1,
                posts:[],
                post:{
                    title:'',
                    content: '',
                },
                bon:{
                    title:'',
                },
            }
        },

        methods:{
            
            openModel: function(){
                this.isOpen = true;
            },

            closeForm: function(){
                this.isOpen = false;
                // this.reset();
                this.editMode=false;
            },

            async addPost(){
                let res = await axios.post('/api/post', this.post);
                console.log("La tuid ay");
                if(res.status === 201){
                    Toast.fire({
                        icon: 'success',
                        title: res.data
                    })
                }
            },

            async addBon(){
                let res = await axios.post('/api/bon', this.bon);
                if(res.status === 201){
                    Toast.fire({
                        icon: 'success',
                        title: res.data
                    })
                }
            },



            getPost(){
                axios.get('/api/post')
                .then((res) => {
                    this.posts = res.data
                }).catch((err) =>{
                    console.log(err);
                });
            }
        },
        
        created(){
            this.getPost();
        },
        
        computed:{
            formTitle(){
                return this.editedIndex === -1 ? 'New a Post' : 'EditItem';
            }
        }
    }
</script>
