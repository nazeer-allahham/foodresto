<template>
    
</template>

<script>
export default {
    props: [
        'url',
    ],
    
    data() {
        return {
            items: [],
            anim_interval: -1,
            start: 1,
            end: 4,
        }
    },
    methods: {
        isVisible(id) {
            //console.log(id);
            return (id >= this.start && id <= this.end);
        }
    },
    mounted() {
        //console.log(this.$props.url);
        axios.get(this.url).then(response => (this.items = response.data));
    },
    created() {
        this.anim_interval = setInterval(() => {
            if(this.end === this.items.length)
            {
                this.start = 1;
                this.end = 4;
            } else 
            {
                this.start += 4;
                this.end += 4;
                if(this.end > this.items.length)
                {
                    this.end =  this.items.length;
                    this.start = this.end - 3;
                }
            }

            //console.log(this.start + ' '+  this.end);
        }, 6000);
    },
    unmounted() {
        clearInterval(this.anim_interval);
    }
}
</script>
