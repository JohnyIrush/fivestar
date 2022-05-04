<template>
 <div class="card text-center">
     <h1>Product List One</h1>
     <ul>
         <li v-for="product in saleProducts" :key="product.id">
             {{product.name}} <span>{{product.price}}</span>
         </li>
     </ul>
     <button class="btn btn-lg btn-success" v-on:click="reducePrice(4)">Reduce Price</button>
 </div>
</template>

<script>
    import { defineComponent } from 'vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';

    import { store } from '../../store/store.js';

    import { mapActions } from 'vuex'
    import { mapGetters } from 'vuex'

    export default defineComponent({
        components: {
            Link, 
        },
        computed:
        {
            products()
            {
                return store.state.products;
            },
            /**
             * This will be converted into getter
            */
           /*
            saleProducts()
            {
                var saleProducts = store.state.products.map((product)=>{
                    return {
                        name: '**' + product.name + '**',
                        price: product.price/2
                    }
                })

                return saleProducts;
            }
            */
           /**This will be mapped using mapGetters */
           /*
            saleProducts()
            {
                return store.getters.saleProducts;
            }
            */
           /*...mapGetters([
               'saleProducts'
           ])*/
        },
        methods:
        {
           /**
             * This will be converted into getter
            */
           /*
            reducePrice()
            {
                store.state.products.forEach(product =>{
                    product.price -= 1
                });
            }
            */
            /**This will be mapped using mapGetters */
           
            reducePrice(amount) 
            {
                //store.commit('reducePrice') // This will be committed via actions
                store.dispatch("reducePrice",amount)
            }
            
           /*...mapGetters([
               'reducePrice'
           ])*/
        }
    })
</script>
