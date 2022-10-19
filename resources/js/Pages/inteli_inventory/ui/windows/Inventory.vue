<template>
  <div class="row">
    <div class="col-12">
     <div 
        :class="columnSize">
        <tab-pane
          :orientation="'vertical'">
           <tab title="Managers" 
                component="TabButton"
                icon_classes="fas fa-user-lock fa-2x"
                tab_button_classes="''">
             <div class="row">
               <div class="col-4 mt-3 mb-3"  v-for="customer in customers" :key="customer.id">
                <!--<p><p>{{manager.firstname}}</p></p>-->
                <user_card :manager="customer"></user_card>
               </div>
             </div>
           </tab>
           <tab title="Warehouse" 
                component="TabButton"
                icon_classes="fas fa-warehouse fa-2x"
                tab_button_classes="mt-6">

           </tab>
           <tab title="Inventory" 
                component="TabButton"
                icon_classes="fas fa-boxes fa-2x"
                tab_button_classes="mt-6">

           </tab>
           <tab title="Purchases" 
                component="TabButton"
                icon_classes="fas fa-cash-register fa-2x"
                tab_button_classes="mt-6">
           </tab>
           <tab title="Expense" 
                component="TabButton"
                icon_classes="fas fa-receipt fa-2x"
                tab_button_classes="mt-6">

           </tab>
           <tab title="Reports" 
                component="TabButton"
                icon_classes="fas fa-newspaper fa-2x"
                tab_button_classes="mt-6">

           </tab>
           <tab title="Settings" 
                component="TabButton"
                icon_classes="fas fa-cogs fa-2x"
                tab_button_classes="mt-6">
         <div class="container-fluid py-4">
           <div class="row">
             <div class="col-12 col-xl-9 glass-content">
               <div class="card h-100">
                 <div class="card-header pb-0 p-3">
                   <h6 class="mb-0">Platform Settings</h6>
                 </div>
                 <div class="card-body p-3">
                   <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                   <ul class="list-group">
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" checked>
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Email me when someone follows me</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault1">
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault1">Email me when someone answers on my post</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault2" checked>
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
                       </div>
                     </li>
                   </ul>
                   <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application</h6>
                   <ul class="list-group">
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault3">
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault3">New launches and projects</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault4" checked>
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault4">Monthly product updates</label>
                       </div>
                     </li>
                     <li class="list-group-item border-0 px-0 pb-0">
                       <div class="form-check form-switch ps-0">
                         <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault5">
                         <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
           </tab>
        </tab-pane>
     </div>
    </div>
  </div>
  <supplier_info_modal></supplier_info_modal>
</template>

<script>
    import { defineComponent } from 'vue'

    import credentials from "../../../Profile/Show.vue";

    import user_card from '../components/cards/user-card.vue'

    import supplier_card from '../components/cards/supplier-card.vue'
    import supplier_info_modal from "../components/modals/supplier-info-modal.vue"

    import purchase_table from "../components/tables/purchase-table.vue"

    import TabPane from '../../../inteli/ui/components/tabs/TabPane.vue'
    import Tab from '../../../inteli/ui/components/tabs/Tab.vue'

    export default defineComponent({
        name: "Inventory",
        components: {
            credentials,
            user_card,
            supplier_card,
            supplier_info_modal,
            purchase_table,
            TabPane,
            Tab
        },
        data() {
            return {
                warehouse: [],
                products: [],
                categories: [],
                brands: [],
                manufacturers: [],
                attributes: [],
                measurements: [],
                weights: [],
                purchases: [],
                customers: [],
                suppliers: [],
                expenses: [],
                expensecategories: [],
                invoices: [],
                sales: [],
                managers: [],
            }
        },

        methods: {
            getManagers()
            {
                axios.get('managers')
                .then((response)=>{
                    this.managers = response.data
                })
            },
            trim(text, length, comment)
            {
                return text.substr(0,length) + comment;
            },
            getSales()
            {
                axios.get("sales")
                .then((response)=>{
                    this.sales = response.data
                    console.log(this.sales)
                })
            },
            getInvoices()
            {
                axios.get("invoices")
                .then((response)=>{
                    this.invoices = response.data
                    console.log(this.invoices)
                })
            },
            getExpensesCategories()
            {
                axios.get("expenses/categories")
                .then((response)=>{
                    this.expensecategories = response.data
                    console.log(this.expensecategories)
                })
            },
            getExpenses()
            {
                axios.get("expenses")
                .then((response)=>{
                    this.expenses = response.data
                    console.log(this.expenses)
                })
            },
            getSuppliers()
            {
                axios.get("suppliers")
                .then((response)=>{
                    this.suppliers = response.data
                    console.log(this.suppliers)
                })
            },
            getCustomers()
            {
                axios.get("customers")
                .then((response)=>{
                    this.customers = response.data
                    console.log(this.customers)
                })
            },
            getPurchases()
            {
                axios.get("purchases")
                .then((response)=>{
                    this.purchases = response.data
                    console.log(this.purchases)
                })
            },
            getWeights()
            {
                axios.get("weights")
                .then((response)=>{
                    this.weights = response.data
                    console.log(this.weights)
                })
            },
            getMeasurements()
            {

                axios.get("measurements")
                .then((response)=>{
                    this.measurements = response.data
                    console.log(this.measurements)
                })
            },
            getAttributes()
            {

                axios.get("attributes")
                .then((response)=>{
                    this.attributes = response.data
                    console.log(this.attributes)
                })
            },
            getBrands()
            {

                axios.get("products/brands")
                .then((response)=>{
                    this.brands = response.data
                    console.log(this.brands)
                })
            },
            getManufacturers()
            {

                axios.get("products/manufacturers")
                .then((response)=>{
                    this.manufacturers = response.data
                    console.log(this.manufacturers)
                })
            },
            getProductCategories()
            {

                axios.get("products/categories")
                .then((response)=>{
                    this.categories = response.data
                    console.log(this.categories)
                })
            },
            getProducts()
            {

                axios.get("products")
                .then((response)=>{
                    this.products = response.data
                    console.log(this.products)
                })
            },
            getWarehouse()
            {

                axios.get("warehouse")
                .then((response)=>{
                    this.warehouse = response.data
                    console.log(this.warehouse)
                })
            }
        },
        mounted(){
            this.getWarehouse()
            this.getProducts()
            this.getProductCategories()
            this.getManufacturers()
            this.getBrands()
            this.getAttributes()
            this.getMeasurements()
            this.getWeights()
            this.getPurchases()
            this.getCustomers()
            this.getSuppliers()
            this.getExpenses()
            this.getExpensesCategories()
            this.getInvoices()
            this.getSales()
            this.getManagers()
        },
    })
</script>


<style scoped>


.glass-container
{
   /*
    position: relative;
    min-height: calc(100vh - 280);
    width: calc(100% - 100px);
    */
    background: rgba(255, 255, 255, 0.5);
    box-shadow: 0 15px 35px rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    justify-content: space-between;
}


.glass-content
{
    transform: translateX(-100);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
    padding: 5px;
}

.card, .card-header, .card-body, .list-group, .list-group-item, .nav
{
  background: transparent !important;
}

.glass-header
{
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    border-left: 1px solid rgba(255, 255, 255, 0.5);
}

.avatar-size
{
    height: 150px !important;
    width: 150px !important;
}

</style>
