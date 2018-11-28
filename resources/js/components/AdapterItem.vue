<template>
    <b-card overlay
        :img-src="this.item.meal.image"
        :img-alt="this.toString(this.item.id)"
        text-variant="white"
        class="adapter-item"
        v-on:mouseenter="this.onHover" v-on:mouseleave="this.onHover">
        <div class="adapter-item-content" v-bind:class="{'d-flex': isHover, 'd-none': !isHover}">
            <div class="col-12 text-center">
                <h3>{{this.item.meal.title}}</h3>
                <h4>{{this.item.description}}</h4>
                <h6 class="badge badge-danger text-strike"><strike>{{this.item.meal.price}} $</strike></h6>
                <h6 class="badge badge-warning">{{this.item.current_price}} $</h6>
                <button class="btn btn-primary col-12">Order Now</button>
            </div>
        </div>
    </b-card>
</template>

<script>
export default {
    props: [
        'item'
    ],
    methods: {
        toString(e) {
            new String(e);
        },
        onHover() {
            this.isHover = !this.isHover;
        }
    },
    data() {
        return {
            isHover: false
        }
    },
    mounted() {
        //console.log(this.item);
    }
}
</script>

<style>
.adapter-item {
    width: 50%;
    height: 50%;
    transition: all 2s ease-in-out;
    padding: 0 !important;
}

.adapter-item-content {
    width: 100%;
    height: 100%;
    opacity: .8;
    background-color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
