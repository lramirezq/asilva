<template>
    <form @submit.prevent="submitForm">
      <div class="form-group">
        <label for="numero_factura">Número de Factura:</label>
        <input type="text" class="form-control" id="numero_factura" v-model="numeroFactura">
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </template>
  
  <script>
  export default {
    data() {
      return {
        numeroFactura: ''
      };
    },
    methods: {
      submitForm() {
        // Llamar al método del controlador con el número de factura
        this.$emit('submit', this.numeroFactura);
      },
      
    }
  };
  </script>
  