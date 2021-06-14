<h3 class="text-gray-700 text-3xl font-semibold">فرم</h3>

<div class="mt-4">
    <h4 class="text-gray-600">مدیریت گروه</h4>

    <div class="mt-4">
        <div class=" w-full bg-gray-100 shadow-md rounded-md overflow-hidden border border-gray-300">
            <form>
                <div class="flex justify-between items-center px-5 py-3 text-gray-700 border-b  border-gray-300">
                    <h3 class="text-sm font-black ">گروه جدید</h3>
                </div>

                <div class="px-5 py-6 bg-white  text-gray-700 border-b border-gray-300">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text ">نام کاربری</span>
                        </label>

                        <input type="text" placeholder="username" class="input input-sm font-normal input-bordered">
                    </div>
                </div>

                <div class="flex justify-between items-center px-5 py-3">
                    <button
                        class="px-3 py-1 text-gray-700 text-sm rounded-md bg-gray-200 hover:bg-gray-300 focus:outline-none">
                        Cancel
                    </button>
                    <button
                        class="px-3 py-1 bg-indigo-600 text-white rounded-md text-sm hover:bg-indigo-500 focus:outline-none">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="mt-8">
    <h4 class="text-gray-600">Forms</h4>

    <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg text-gray-700 font-semibold capitalize">Account settings</h2>
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Username</span>
                </label>
                <input type="text" placeholder="username" class="input input-bordered">
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Primary</span>
                </label>
                <input type="text" placeholder="username" class="input input-primary input-bordered">
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Secondary</span>
                </label>
                <input type="text" placeholder="username" class="input input-secondary input-bordered">
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Accent</span>
                </label>
                <input type="text" placeholder="username" class="input input-accent input-bordered">
            </div>

            <form>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                    <div>
                        <label class="text-gray-700" for="username">Username</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="text">
                    </div>

                    <div>
                        <label class="text-gray-700" for="emailAddress">Email Address</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="email">
                    </div>

                    <div>
                        <label class="text-gray-700" for="password">Password</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="password">
                    </div>

                    <div>
                        <label class="text-gray-700" for="passwordConfirmation">Password Confirmation</label>
                        <input class="form-input w-full mt-2 rounded-md focus:border-indigo-600" type="password">
                    </div>
                </div>

                <div class="flex justify-end mt-4">
                    <button
                        class="px-4 py-2 bg-gray-800 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
