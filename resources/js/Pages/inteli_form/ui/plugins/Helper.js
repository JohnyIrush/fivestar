import { ref } from "vue";
const bus = ref(new Map());

export default function useHelper(){
	
	function isEmpty(value)
	{
		if (this.isObject(value)) {
			return Object.keys(value).length === 0;
		}

		return(
			value === undefined ||
			value === null ||
			value.length === 0
		);
	}

	function isObject(value)
	{
		return value instanceof Object && !Array.isArray(value);
	}

	return
	{
		isEmpty,
		isObject
	}
}