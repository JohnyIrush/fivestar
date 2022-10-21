<template>
  <module-container
   :ModuleDetails="[
     {
      widget_title: 'Warehouse Managers',
      widget_tab_icon_classes: 'fas fa-user-lock fa-2x',
      widget_tab_button_classes: '',
      widget_component_name: 'WarehouseManager',
      widget_component_path: '../../inteli_inventory/ui/widgets/WarehouseManager.vue'
     },
     {
      widget_title: 'Warehouse',
      widget_tab_icon_classes: 'fas fa-warehouse fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Warehouse',
      widget_component_path: '../../inteli_inventory/ui/widgets/Warehouse.vue'
     },
     {
      widget_title: 'Inventory',
      widget_tab_icon_classes: 'fas fa-boxes fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Inventory',
      widget_component_path: '../../inteli_inventory/ui/widgets/Inventory.vue'
     },
     {
      widget_title: 'Purchases',
      widget_tab_icon_classes: 'fas fa-cash-register fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Purchase',
      widget_component_path: '../../inteli_inventory/ui/widgets/Purchase.vue'
     },
     {
      widget_title: 'Expenses',
      widget_tab_icon_classes: 'fas fa-receipt fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Expense',
      widget_component_path: '../../inteli_inventory/ui/widgets/Expense.vue'
     },
     {
      widget_title: 'Reports',
      widget_tab_icon_classes: 'fas fa-newspaper fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'Report',
      widget_component_path: '../../inteli_inventory/ui/widgets/Report.vue'
     },
     {
      widget_title: 'Settings',
      widget_tab_icon_classes: 'fas fa-cogs fa-2x',
      widget_tab_button_classes: 'mt-6',
      widget_component_name: 'InventorySetting',
      widget_component_path: '../../inteli_inventory/ui/widgets/InventorySetting.vue'
     },

   ]">
  </module-container>
</template>

<script>
    import { defineComponent } from 'vue'

    import ModuleContainer from '../../../Theme/widgets/ModuleContainer.vue'
    export default defineComponent({
        name: "Inventory",
        components: {
            ModuleContainer 
        },
        data() {
            return {
            }
        },

    })
</script>

