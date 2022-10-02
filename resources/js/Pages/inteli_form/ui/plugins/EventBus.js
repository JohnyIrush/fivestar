import { ref } from "vue";
const bus = ref(new Map());

export default function useEventsBus(){

    function emiter(event, ...args) {
        bus.value.set(event, args);
    }

    function on(event, callback) {
        bus.value.get(event, callback);
    }

    function fire(events, ...data)
    {
        wrapper(events, 
                     () => emit(events, ...data),
                     index => emit(events[index], ...data)
                     );
    }

    function listen(events, callback)
    {
        this.wrapper(events, 
                () => on(events, callback),
                index => on(events[index], callback));
    }


    function wrapper(events, ifNotArray, otherwise)
    {
        if (!Array.isArray(events))
        {
            ifNotArray();
            return;
        }

        for(const index in events)
        {
            otherwise(index);
        }  
    }

    return {
        emiter,
        bus,
        fire,
        listen
    }
}