<template>
    
</template>
<script>
    import { defineComponent } from 'vue'


    export default defineComponent({
        name: "Inventory",
        components: {

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
