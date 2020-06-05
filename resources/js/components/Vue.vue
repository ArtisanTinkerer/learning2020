<template>
    <div>

        <div class="bg-gray-100 flex">
            <div class="p-10 max-w-md mx-auto sm:max-w-xl lg:w-1/2 lg:max-w-full lg:py-24 lg:px-12">

                <img class="h-24 rounded-lg shadow-xl" src="/images/cover.png" alt="Book Shorts">

                <img class="lg:hidden mt-6 sm:mt-8 sm:h-64 sm:w-full sm:object-cover rounded-lg shadow-xl object-center" src="/images/pic.jpg" alt="Person Reading">
                <h1 class="mt-6 sm:mt-8 text-lg sm:text-4xl font-bold text-grey-900">Why read or write lengthy reviews when you could be enjoying a new book?</h1>
                <p class="mt-2 sm-mt-4 sm-text-2xl text-orange-500">
                    Book Shorts helps you quickly find your next book.
                </p>
                <div class="mt-4 sm:mt-6 sm:text-base">
                    <a href="/books" class="btn btn-orange">Get started</a>
                    <a href="#" class="btn btn-gray">Tell me more</a>
                </div>
            </div>

            <div class="hidden lg:block lg:w-1/2 lg:relative">
                <img class="absolute inset-0 h-full w-full object-cover object-center" src="/images/pic.jpg" alt="Person Reading">
            </div>
        </div>


        <div>
            <div class="max-w-md sm:max-w-xl lg:max-w-6xl mx-auto px-8 lg:px-12 py-8">
                <h2 class="text-xl text-gray-900">Popular destinations</h2>
                <p class="text-gray-600">A selection of great work-friendly cities with lots to see and explore.</p>
                <div class="flex flex-wrap -mx-4">
                    <div class="mt-6 w-full px-4 lg:w-1/2 xl:w-1/3" v-for="destination in popularDestinations">
                        <DestinationCard :destination="destination"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import DestinationCard from './DestinationCard.vue'


    export default {
        name: 'app',
        components: {
            DestinationCard,
        },
        data() {
            return {
                popularDestinations: [
                    {
                        city: 'Toronto',
                        averagePrice: 120,
                        propertyCount: 76,
                        imageUrl: '/img/toronto.jpg',
                        imageAlt: 'Toronto skyline',
                    },
                    {
                        city: 'Malibu',
                        averagePrice: 215,
                        propertyCount: 43,
                        imageUrl: '/img/malibu.jpg',
                        imageAlt: 'Cliff in Malibu',
                    },
                    {
                        city: 'Chicago',
                        averagePrice: 130,
                        propertyCount: 115,
                        imageUrl: '/img/chicago.jpg',
                        imageAlt: 'Chicago skyline',
                    },
                    {
                        city: 'Seattle',
                        averagePrice: 135,
                        propertyCount: 63,
                        imageUrl: '/img/seattle.jpg',
                        imageAlt: 'Seattle skyline',
                    },
                    {
                        city: 'Colorado',
                        averagePrice: 85,
                        propertyCount: 47,
                        imageUrl: '/img/colorado.jpg',
                        imageAlt: 'Lake in Colorado',
                    },
                    {
                        city: 'Miami',
                        averagePrice: 115,
                        propertyCount: 86,
                        imageUrl: '/img/miami.jpg',
                        imageAlt: 'Beach in Miami',
                    },
                ]
            }
        }
    }
</script>

<!--<style src="./assets/tailwind.css"></style>-->
