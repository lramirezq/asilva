<template>
    <Head title="Facturas" />

    <AuthenticatedLayout>
        <template #header> Facturas </template>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 border-b border-gray-200">
                <FacturaForm @submit="buscarFactura"></FacturaForm>
            </div>

            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Número</th>
                            <th>Fecha</th>
                            <th>DocumentReceiverName</th>
                            <th>Neto</th>
                            <th>IVA</th>
                            <th>TOTAL</th>
                            <th>PDF</th>
                            <th>XML</th>

                            <!-- Agrega más encabezados según tus necesidades -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="factura in facturas" :key="factura.id">
                            <td>{{ factura.Number }}</td>
                            <td>{{ formatDate(factura.Date) }}</td>
                            <td>{{ factura.DocumentReceiverName }}</td>
                            <td
                                v-text="
                                    formatoSeparadorMiles(factura.NetAmount)
                                "
                            ></td>
                            <td
                                v-text="
                                    formatoSeparadorMiles(factura.TaxAmount)
                                "
                            ></td>
                            <td>
                                {{ formatoSeparadorMiles(factura.TotalAmount) }}
                            </td>
                            <td>
                                <a :href="factura.UrlPdf" target="_blank">
                                    <i class="fas fa-file-pdf"></i>
                                    <!-- Icono de PDF de Font Awesome -->
                                </a>
                            </td>
                            <td>
                                <a :href="factura.UrlXml" target="_blank">
                                    <i class="fas fa-file-code"></i>
                                    <!-- Icono de código de Font Awesome -->
                                </a>
                            </td>
                            <!-- Agrega más celdas según tus necesidades -->
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<script>
import FacturaForm from "@/Components/FacturaForm.vue";
export default {
    data() {
        return {
            numeroFactura: "",
        };
    },
    methods: {
        buscarFactura(numeroFactura) {
            axios
                .get(`/buscar-factura/${numeroFactura}`)
                .then((response) => {
                    // Manejar la respuesta del controlador
                })
                .catch((error) => {
                    // Manejar errores
                });
        },
        formatDate(date) {
            // Parsear la fecha en formato ISO 8601
            const parsedDate = new Date(date);

            // Obtener los componentes de la fecha
            const day = parsedDate.getDate();
            const month = parsedDate.getMonth() + 1; // Los meses son indexados desde 0
            const year = parsedDate.getFullYear();

            // Formatear la fecha en el formato dd/mm/yyyy
            return `${day}/${month}/${year}`;
        },
        formatoSeparadorMiles(valor) {
            const numero = parseFloat(valor);

            // Verificar si el número es un valor numérico válido
            if (!isNaN(numero)) {
                // Formatear el número con separadores de miles
                return numero.toLocaleString(undefined, {
                    minimumFractionDigits: 0,
                    maximumFractionDigits: 0,
                });
            } else {
                // Si la conversión falla, devolver la cadena original
                return valor;
            }
        },
    },

    props: {
        facturas: {
            type: Array,
            required: true,
        },
    },
};
</script>
<style scoped>
/* Estilos para la tabla */
.table {
    border-collapse: collapse;
    width: 100%; /* Establece el ancho de la tabla al 100% */
}

/* Estilos para las celdas de la tabla */
.table td, .table th {
    border: 1px solid #dddddd;
    padding: 8px;
    text-align: left;
}

/* Estilos para las celdas de encabezado */
.table th {
    background-color: #f2f2f2;
}
</style>