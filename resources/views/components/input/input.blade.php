@props(['name'=>'', 'label'=>'لیبل', 'readonly'=>'', 'text_size'=>'','type'=>''])

<div class="relative  mb-2 rounded">
    <input id="{{$name}}" type="{{$type}}"   wire:model="{{$name}}" placeholder=" " required
           class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 rounded-lg border-1 appearance-none
                           border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600 bg-transparent peer"
    >
    @error($name)
    {{$message}}
    @enderror
    <label for="{{$name}}" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4
                     scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600
                     peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2
                     peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4
                     rtl:peer-focus:left-auto start-1
                    ">{{$label}}</label>


</div>


