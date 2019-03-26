<template>
    <div class="laravue-chat">
        <Conversation :contact="selectedContact" v-bind="messages" />
        <ContactList :contacts="contacts" />
    </div>
</template>

<script>
    export default {
        data() {
            return {
                selectedContact: null,
                messages: [],
                contacts: []
            };
        },
        mounted() {
            axios.get('/contacts')
                .then((response) => {
                    this.contacts = response.data;
                });
        }
    }
</script>
