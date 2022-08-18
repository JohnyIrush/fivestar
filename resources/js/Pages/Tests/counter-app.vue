<script>
import { defineComponent } from 'vue';

import {store} from "../../store/store.js"

export default defineComponent({
  // state
  data () {
    return {
    }
  },
  // view
  template: `
    <div>
      Count: {{ count }}
      <button @click="increment">Increment</button>
      Todos Count: {{ doneTodosCount }}
      Todo Id 2: {{ getTodobyId }}
  </div>
  `,
  computed: {
    count () {
      return store.state.count
    },
    doneTodosCount () {
      return store.getters.doneTodosCount
    },
    getTodoById()
    {
      return store.getters.getTodoById(2).text
    }

  },
  // actions
  methods: {
    increment () {
    store.commit('increment',5)
    console.log(store.state.count)
    }
  }
});
</script>
//createApp(Counter).mount('#app')
