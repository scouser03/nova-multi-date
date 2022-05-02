<template>
        <div class="flex border-b border-40 -mx-6 px-6">
    
    <div class="w-1/4 py-4">
      <slot>
        <h4 class="font-normal text-80">{{ field.name }}</h4>
      </slot>
    </div>
    <div class="w-3/4 py-4 break-words">
      <slot name="value">
        <p class="text-90">
            <div v-if="data.length" v-for="date in data" class="flex items-center">
                <div class="flex items-center space-2 border border-40 p-2 mt-1 rounded-lg">
                    <div class="flex items-center">
                        <label class="bg-white text-80 mr-2 font-bold"
                            >From:</label
                        >
                        <span
                            class="from-control w-full"
                        >
                        {{ date.from_date }}
                        </span>
                    </div>
                    <div class="flex items-center">
                        <label class="bg-white ml-2 text-80 font-bold"
                            >to:</label
                        >
                        <span
                            class="ml-1 from-control w-full"
                        >
                        {{ date.to_date }}
                        </span>
                    </div>
                </div>
            </div>
        </p>
      </slot>
    </div>
  </div>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],

    data(){
        return {
            data: JSON.parse(this.field.value)
        }
    }
}
</script>
