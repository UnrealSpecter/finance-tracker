<template>
    <div class="flex flex-col bg-green-dark overflow-hidden shadow-md text-white " style="height: 800px; width: 700px; border-radius: 10px;">

        <div class="flex flex-row items-center justify-center bg-green-light w-full h-24 text-4xl font-bold uppercase font-mono">Maandelijkse Financien</div>

        <div class="flex flex-row items-center justify-center bg-green-light w-full h-24 text-5xl font-bold uppercase font-mono border-b border-green-light"> 3000 &euro;</div>

        <div class="flex flex-row items-center justify-center bg-green-light w-full h-24 text-4xl font-bold uppercase font-mono border-b border-green-light">
            <div class="flex flex-col justify-center bg-green-darker w-3/4 h-full px-6">
                <div class="text-3xl">Gemeente UVS</div>
                <div class="text-xl">13 Maart - 2019</div>
            </div>
            <div class="flex flex-row items-center justify-center bg-green-darker w-1/4 h-full">+ 500 &euro;</div>
        </div>

        <div class="flex flex-row items-center justify-center bg-green-light w-full h-24 text-4xl font-bold uppercase font-mono border-b border-green-light">
            <div class="flex flex-col justify-center bg-green-darker w-3/4 h-full px-6">
                <div class="text-3xl">Gemeente UVS</div>
                <div class="text-xl">13 Maart - 2019</div>
            </div>
            <div class="flex flex-row items-center justify-center bg-green-darker w-1/4 h-full">- 500 &euro;</div>
        </div>

        <div class="flex flex-row items-center justify-center bg-green-light w-full h-24 text-4xl font-bold uppercase font-mono border-b border-green-light">
            <div class="flex flex-col justify-center bg-green-darker w-3/4 h-full px-6">
                <div class="text-3xl">Gemeente UVS</div>
                <div class="text-xl">13 Maart - 2019</div>
            </div>
            <div class="flex flex-row items-center justify-center bg-green-darker w-1/4 h-full">- 500 &euro;</div>
        </div>

        <div class="flex flex-row items-center justify-center bg-green-light w-full h-24 text-4xl font-bold uppercase font-mono border-b border-green-light">
            <div class="flex flex-col justify-center bg-green-darker w-3/4 h-full px-6">
                <div class="text-3xl">Gemeente UVS</div>
                <div class="text-xl">13 Maart - 2019</div>
            </div>
            <div class="flex flex-row items-center justify-center bg-green-darker w-1/4 h-full">+ 500 &euro;</div>
        </div>

        <div class="flex flex-row items-center justify-center bg-green-light w-full h-24 text-4xl font-bold uppercase font-mono border-b border-green-light">
            <div class="flex flex-col justify-center bg-green-darker w-3/4 h-full px-6">Over Einde Maart: </div>
            <div class="flex flex-row items-center justify-center bg-green-darker w-1/4 h-full">~1000 &euro;</div>
        </div>

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
