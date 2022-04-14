<x-master-layout>
    <div class="relative px-4 sm:px-6 lg:px-8">
        <div class="text-lg max-w-prose mx-auto">
            <h1>

                <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">{{$data['data']['title']}}</span>
            </h1>
            <!-- <p class="mt-8 text-xl text-gray-500 leading-8">Today, the Maldivian post-secondary education sector is growing rapidly, with an increasing number of private providers entering the sector to meet the demand. Emerging from this growing importance of post-secondary education is the concomitant requirement to assure the quality of qualifications awarded in testimony of educational attainments. Thus, the Maldives National Qualifications Framework (MNQF) is designed to:</p> -->

        </div>
        <div>
            <!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
            <div>
                <div class="sm:hidden">
                    <label for="tabs" class="sr-only">Select a tab</label>
                    <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
                    <select id="tabs" name="tabs" class="block w-full focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                        <option selected>My Account</option>

                        <option>Company</option>

                        <option>Team Members</option>

                        <option>Billing</option>
                    </select>
                </div>

                <livewire:tab-item-component :tabs="$data['data']['tabs']" />
            </div>

        </div>

    </div>
</x-master-layout>