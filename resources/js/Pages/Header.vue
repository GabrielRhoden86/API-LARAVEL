<template>
    <header>
      <h1>Header!</h1>
        <p>{{ msg }}</p>
        <div v-on:click="writeText">
       {{ text }}
     </div>
    </header>
</template>

<script>
export default {
  name: "Header",
  data() {
    return {
      msg: "Item Header!!!",
      text: "ok"
    };
  },
  methods: {
    writeText() {
      this.text = 'Hello World!'
    }
  }
};
</script>
