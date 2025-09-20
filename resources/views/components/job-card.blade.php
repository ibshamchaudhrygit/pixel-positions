@props(['job'])

<x-panel class="flex flex-col text-center ">
    <div clas cala ss=flex flex-col text-center s="self-start text-sm">Laracasts</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">Video Producer</h3>
        <h3 class="text-sm mt-4">Full Time - From $60,000</h3>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
        @foreach ($job->tags as $tag)
            <x-tag size="small" :$tag/>
        @endforeach
        </div>

    <x-employer-logo :width="42"/>
    </div>
</x-panel>
