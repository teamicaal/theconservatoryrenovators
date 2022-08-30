<template>
  <div class="container mx-auto py-16">
    <h1 class="mb-8">Todo List</h1>

    <input
      type="text"
      v-model="todo"
      placeholder="Type item and hit enter"
      @keyup.enter="addTodo"
      class="border border-gray-200 mb-4 px-4 py-2"
    />

    <ul class="mb-4">
      <li v-for="todo in todos" :key="todo.id">
        <input type="checkbox" v-model="todo.completed" />
        {{ todo.title }}
      </li>
    </ul>

    <div class="total">
      <span>Completed: {{ numberOfCompletedTodos }}</span>
    </div>
  </div>
</template>

<script>
import { computed, ref, watch } from "vue";
export default {
  setup() {
    let id = 0;

    const todo = ref("");
    const todos = ref([]);

    const numberOfCompletedTodos = computed(
      () => todos.value.filter((todo) => todo.completed).length
    );

    const addTodo = () => {
      todos.value.push({
        id: id,
        title: todo.value.trim(),
        completed: false,
      });

      todo.value = "";

      id++;
    };

    watch(
      todos,
      (newValue) => {
        console.log(`New value: ${newValue.length}`);
      },
      { deep: true }
    );

    return {
      todo,
      todos,
      addTodo,
      numberOfCompletedTodos,
    };
  },
};
</script>