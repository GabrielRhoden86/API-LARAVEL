<template>
    <header>
        <h1>Header</h1>
        <p>{{ msg }}</p>
    </header>
</template>

<script>
export default {
  name: "Header",
  data() {
    return {
      msg: "Item Header!!!",
    };
  },
};
</script>
