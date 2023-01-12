<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>
    <div class="p-12">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ route('users.update', $user->id) }}" method="post">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium text-gray-700">First
                                    name</label>
                                <input type="text" name="firstname" id="firstname"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    value="{{ $user->firstname??'' }}">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium text-gray-700">Last
                                    name</label>
                                <input type="text" name="lastname" id="lastname"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    value="{{ $user->lastname??'' }}">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="email-address" class="block text-sm font-medium text-gray-700">Email
                                    address</label>
                                <input type="text" name="email" id="email-address" autocomplete="email"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    value="{{ $user->email??'' }}">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                <input type="password" name="password" id="password" autocomplete="new-password"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="phone" class="block text-sm font-medium text-gray-700">Phone #</label>
                                <input type="text" name="phone" id="phone" value="{{ $user->phone??'' }}"
                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="father_name" class="block text-sm font-medium text-gray-700">Father Name</label>
                                <input type="text" name="father_name" id="father_name" value="{{ $user->father_name??'' }}"
                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="cnic" class="block text-sm font-medium text-gray-700">CNIC</label>
                                <input type="text" name="cnic" id="cnic" value="{{ $user->cnic??'' }}"
                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                                <input type="text" name="address" id="address" value="{{ $user->address??'' }}"
                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="address2" class="block text-sm font-medium text-gray-700">Additional Address</label>
                                <input type="text" name="address2" id="address2" value="{{ $user->address2??'' }}"
                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                <input type="text" name="city" id="city" value="{{ $user->city??'' }}"
                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                                <input type="text" name="state" id="state" value="{{ $user->state??'' }}"
                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="dob" class="block text-sm font-medium text-gray-700">Data of Birth</label>
                                <input type="date" name="dob" id="dob" value="{{ $user->dob??'' }}"
                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="dod" class="block text-sm font-medium text-gray-700">Date of Death</label>
                                <input type="date" name="dod" id="dod" value="{{ $user->dod??'' }}"
                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                                <input type="file" name="image" id="image"
                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="image" class="block text-sm font-medium text-gray-700">Gender</label>
                                <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" {{$user->gender=='Male'?'checked':''}}>
                                <label class="form-check-label" for="exampleRadios1">
                                    Male
                                </label>
                                <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Female" {{$user->gender=='Female'?'checked':''}}>
                                <label class="form-check-label" for="exampleRadios2">
                                    Female
                                </label>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="religion" class="block text-sm font-medium text-gray-700">Religion</label>
                                <select id="religion" name="religion" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" style="height: 49px;" >
                                    <option disabled selected value="">Choose...</option>
                                    <option value="Muslim" {{$user->religion=='Muslim'?'selected':''}}>Muslim</option>
                                    <option value="Non-Muslim" {{$user->religion=='Non-Muslim'?'selected':''}}>Non-Muslim</option>
                                </select>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea name="description" id="description" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" rows="3">{{$user->description}}</textarea>
                            </div>

                            {{--<div class="col-span-6 sm:col-span-3">
                                <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                                <select id="company" name="company" autocomplete="company-name"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach ($companies as $company)
                                    <option value="{{ $company->id }}" {{ ($user->company == $company->id) ? 'selected'
                                        : '' }}>{{ $company->name }}</option>
                                    @endforeach
                                </select>
                            </div>--}}

                            {{--<div class="col-span-6 sm:col-span-3">
                                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                                <select id="role" name="role"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="admin" {{ (strcmp($user->role, 'admin') == 0) ? 'selected'
                                        : '' }}>Admin</option>
                                    <option value="user" {{ (strcmp($user->role, 'user') == 0) ? 'selected'
                                        : '' }}>User</option>
                                </select>
                            </div>--}}

                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <input type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            value="Save" />
                        @method('patch')
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
