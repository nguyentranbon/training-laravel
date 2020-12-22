<template>
  <header
    class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-indigo-600"
  >
    <div class="flex items-center">
      <button
        @click="isOpen = true"
        class="text-gray-500 focus:outline-none lg:hidden"
      >
        <svg
          class="h-6 w-6"
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M4 6H20M4 12H20M4 18H11"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>
      </button>

      <div class="relative mx-4 lg:mx-0">
        <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
          <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
            <path
              d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </span>

        <input
          class="form-input w-32 sm:w-64 rounded-md pl-10 pr-4 focus:border-indigo-600"
          type="text"
          placeholder="Search"
        />
      </div>
    </div>




    <!-- Settings Dropdown -->
    <div class="hidden sm:flex sm:items-center sm:ml-6">
        <div class="ml-3 relative">
            <jet-dropdown align="right" width="48">
                <template #trigger>
                    <button v-if="$page.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                        <img class="h-8 w-8 rounded-full object-cover" :src="$page.user.profile_photo_url" :alt="$page.user.name" />
                    </button>

                    <button v-else class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                        <div>{{ $page.user.name }}</div>

                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </template>

                <template #content>
                    <!-- Account Management -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        Manage Account
                    </div>

                    <jet-dropdown-link :href="route('profile.show')">
                        Profile
                    </jet-dropdown-link>

                    <jet-dropdown-link :href="route('api-tokens.index')" v-if="$page.jetstream.hasApiFeatures">
                        API Tokens
                    </jet-dropdown-link>

                    <div class="border-t border-gray-100"></div>

                    <!-- Team Management -->
                    <template v-if="$page.jetstream.hasTeamFeatures">
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            Manage Team
                        </div>

                        <!-- Team Settings -->
                        <jet-dropdown-link :href="route('teams.show', $page.user.current_team)">
                            Team Settings
                        </jet-dropdown-link>

                        <jet-dropdown-link :href="route('teams.create')" v-if="$page.jetstream.canCreateTeams">
                            Create New Team
                        </jet-dropdown-link>

                        <div class="border-t border-gray-100"></div>

                        <!-- Team Switcher -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            Switch Teams
                        </div>

                        <template v-for="team in $page.user.all_teams">
                            <form @submit.prevent="switchToTeam(team)" :key="team.id">
                                <jet-dropdown-link as="button">
                                    <div class="flex items-center">
                                        <svg v-if="team.id == $page.user.current_team_id" class="mr-2 h-5 w-5 text-green-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        <div>{{ team.name }}</div>
                                    </div>
                                </jet-dropdown-link>
                            </form>
                        </template>

                        <div class="border-t border-gray-100"></div>
                    </template>

                    <!-- Authentication -->
                    <form @submit.prevent="logout">
                        <jet-dropdown-link as="button">
                            Logout
                        </jet-dropdown-link>
                    </form>
                </template>
            </jet-dropdown>
        </div>
    </div>


  </header>
</template>

<script>
import JetApplicationMark from '@/Jetstream/ApplicationMark'
import JetDropdown from '@/Jetstream/Dropdown'
import JetDropdownLink from '@/Jetstream/DropdownLink'
import JetNavLink from '@/Jetstream/NavLink'
import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'

export default {
    data() {
        return {
            isOpen:false,
        }
    },
    methods: {
        switchToTeam(team) {
            this.$inertia.put(route('current-team.update'), {
                'team_id': team.id
            }, {
                preserveState: false
            })
        },

        logout() {
            axios.post(route('logout').url()).then(response => {
                window.location = '/';
            })
        },
    },
    components: {
            JetApplicationMark,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
    },
}
</script>

<style>

</style>