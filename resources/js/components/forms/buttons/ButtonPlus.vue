<script setup>
    const emit = defineEmits(['click']);
    const props = defineProps({
        link: { required: false, type: String  },
        modal: { required: false, type: Boolean, default: false, }
    })
</script>

<template>
    <!-- SI ES MODAL:  Link el Id del modal, modal= modal, onclick nada a menos que tenga que ejecutar algún script -->
    <a  v-bind:href="props.link" 
        v-bind:data-bs-toggle="props.modal ? 'modal' : 'no_modal'" 

        v-on:click="emit('click')" 

        accesskey="A">
        <i class="fa fa-plus-circle fa-3x" aria-hidden="true" style="color: rgb(106,108,106);" ></i>
    </a>
</template>