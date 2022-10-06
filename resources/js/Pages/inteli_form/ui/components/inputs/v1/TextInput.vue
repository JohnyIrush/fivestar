<script>
    import { defineComponent } from 'vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';

    //import useEventsBus from '../../plugins/eventBus.js';

    //const {emiter,bus,fire,listen} = useEventsBus()

    //import useHelper from '../../plugins/Helper.js';

    //const {isEmpty, isObject} = useHelper()

    import { provide } from 'vue'

    export default defineComponent({
    	name: "TextInput",
    	props:{
    		group:{
    			type: String,
    			required: true
    		},
    		name:{
    			type: String,
    			required: true
    		},
    		id:{
    			type: String,
    			required: false
    		},
    		value: {
    			default: ''
    		},
    		currentValue: {
    			default: '',
    		},
    		placeholder:{
    			type: String,
    			required: false
    		},
    		focus:{
    			type: Boolean,
    			default: false
    		},
    		maxLength:{
    			type: String,
    			required: false
    		},
    		autocomplete:{
    			type: String,
    			required: false
    		},
            validation:{
                type: [Array, Object],
                default: () => []
            }
    	},
        data()
        {
            return {
            	identity: this.id ? this.id : this.name,
                displayValidation: false
            }
        },
        computed:{
        	inputListeners()
        	{
        		return Object.assign({}, this.$listeners,{
        			input: event =>{
        				this.emit(event.target.value)
        			}
        		})
        	}
        },
        mounted()
        {
        	this.emit(this.currentValue)
        },
        methods:{
        	emit(value)
        	{
        		this.$emit('input', value)
        	},
            initialize()
            {
                
                if (this.isEmpty(this.validation))
                {
                    return;
                }

                let rules = this.validation;

                if (!Array.isArray(this.validation)) {
                    this.displayValidation = true
                    rules = Object.keys(this.validation);
                }

                fire('initialize-'+ this.group,{
                    field: this.name,
                    rules: rules
                })
            },
            isEmpty(value)
            {
                if (this.isObject(value)) {
                    return Object.keys(value).length === 0;
                }

                return(
                    value === undefined ||
                    value === null ||
                    value.length === 0
                );
            },
            isObject(value)
            {
                return value instanceof Object && !Array.isArray(value);
            },

            },
            setup(props) {
              provide(/* key */ 'textInputValue', /* value */ props.value)
            }
            });
</script>

<template>
	<input 
	    type="text" 
        :id="identity"
	    :name="name"
	    :value="value"
	    :maxLength="maxLength"
	    :placeholder="placeholder"
	    :autocomplete="autocomplete"
	    v-on="inputListeners"
	    >
</template>