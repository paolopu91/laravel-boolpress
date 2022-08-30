<template>
    <div>
        <h1>
            pagina contatti
        </h1>

        <form @submit.prevent="onFormSubmit">
            <input type="text" placeholder="nome" v-model="name">
            <br>
            <textarea cols="30" rows="10" placeholder="Messaggio" v-model="message"></textarea>
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
  data() {
    return {
      name: "",
      message: ""
    }
  },
  methods: {
    onFormSubmit() {
      axios.post("/api/contacts", {
        name: this.name,
        message: this.message
      })
    }
  }
}
</script>