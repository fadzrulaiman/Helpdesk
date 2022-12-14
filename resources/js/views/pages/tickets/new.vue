<template>
    <div class="py-10">
        <header>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-5">
                <div class="md:flex md:items-center md:justify-between">
                    <div class="flex-1 min-w-0">
                        <h2 class="py-0.5 text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                            {{ $t('New ticket') }}
                        </h2>
                    </div>
                    <div class="mt-4 flex md:mt-0 md:ml-4">
                        <router-link
                            class="btn btn-blue shadow-sm rounded-md"
                            to="/tickets/list"
                        >
                            {{ $t('Return to tickets list') }}
                        </router-link>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mt-10 my-6 bg-white shadow overflow-hidden sm:rounded-md">
                    <loading :status="loading.form"/>
                    <form @submit.prevent="saveTicket">
                        <div class="bg-white md:grid md:grid-cols-3 px-4 py-5">
                            <div class="md:col-span-2">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3">
                                        <label class="block text-sm font-medium leading-5 text-gray-700" for="role">{{ $t('Subject') }}</label>
                                            <div class="mt-1 relative rounded-md shadow-sm">
                                        <select
                                            id="subject"
                                            v-model="ticket.subject"
                                            class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                            required
                                        >
                                            <option :value="null" disabled>{{ $t('Select an option') }}</option>
                                            <option v-for="option in options" :value="option.value">{{ option.text }}</option>
                                        </select>
                                            </div>
                                    </div>
                                </div>
                                <br>
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3">
                                    <label class="block text-sm font-medium leading-5 text-gray-700" for="role">{{ $t('Classification') }}</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <select
                                            id="classification"
                                            v-model="ticket.classification"
                                            class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                            required
                                        >
                                            <option :value="null" disabled>{{ $t('Select an option') }}</option>
                                            <option v-for="option in choose" :value="option.value">{{ option.text }}</option>
                                        </select>
                                    </div>
                                </div>
                                    <div class="col-span-3">
                                        <label class="block text-sm font-medium leading-5 text-gray-700" for="ticket_body">{{ $t('Ticket body') }}</label>
                                        <div class="mt-1 relative rounded-md shadow-sm">
                                            <input-wysiwyg
                                                id="ticket_body"
                                                v-model="ticket.body"
                                                :plugins="{images: true, attachment: true}"
                                                @selectUploadFile="selectUploadFile"
                                            >
                                                <template v-slot:top>
                                                    <div :class="{'bg-gray-200': uploadingFileProgress > 0}" class="h-1 w-full">
                                                        <div :style="{width: uploadingFileProgress + '%'}" class="bg-blue-500 py-0.5"></div>
                                                    </div>
                                                </template>
                                            </input-wysiwyg>
                                        </div>
                                    </div>
                                    <div v-if="ticket.attachments.length > 0" class="col-span-3">
                                        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-2">
                                            <template v-for="(attachment, index) in ticket.attachments">
                                                <attachment :details="attachment" v-on:remove="removeAttachment(index)"/>
                                            </template>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-100 px-4 py-3 sm:px-6">
                            <div class="inline-flex">
                                <button
                                    class="btn btn-green shadow-sm rounded-md"
                                    type="submit"
                                >
                                    {{ $t('Create ticket') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <input ref="fileInput" hidden type="file" @change="uploadFile($event)">
                </div>
            </div>
        </main>
    </div>
</template>

<script>
export default {
    name: "index",
    metaInfo() {
        return {
            title: this.$i18n.t('New ticket')
        }
    },
    data() {
        return {
            subject: null,
      options: [
        { text: 'Hardware - Computer', value: 'Hardware - Computer' },
        { text: 'Hardware - Printers', value: 'Hardware - Printers' },
        { text: 'Hardware - UPS', value: 'Hardware - UPS' },
        { text: 'Software - Installation & Deployment', value: 'Software - Installation & Deployment' },
        { text: 'Software - Operating System', value: 'Software - Operating System' },
        { text: 'Software - Incident/Issue', value: 'Software - Incident/Issue' },
        { text: 'Network - Network Equipment', value: 'Network - Network Equipment' },
        { text: 'Network - Connection & Line', value: 'Network - Connection & Line' },
        { text: 'Network - Call Centre Related', value: 'Network - Call Centre Related' },
        { text: 'Network - Incident/Issue', value: 'Network - Incident/Issue' },
        { text: 'ASIS - User Unlock Password (Forgotten Password)', value: 'ASIS - User Unlock Password (Forgotten Password)' },
        { text: 'ASIS - Incident/Issue', value: 'ASIS - Incident/IssueB' },
        { text: 'RAMCO - User Unlock Password (Forgotten Password)', value: 'RAMCO - User Unlock Password (Forgotten Password)' },
        { text: 'RAMCO - Incident/Issue', value: 'RAMCO - Incident/Issue' },
        { text: 'EMAIL - User Unlock Password (Forgotten Password)', value: 'EMAIL - User Unlock Password (Forgotten Password)' },
        { text: 'EMAIL - Incident/Issue', value: 'EMAIL - Incident/Issue' },],

            classification: null,
        choose: [
        { text: 'Incident', value: 'Incident' },
        { text: 'Service Request', value: 'Service Request' },
        ],

            loading: {
                form: false,
                file: false,
            },
            uploadingFileProgress: 0,
            ticket: {
                subject: null,
                classification: null,
                body: '',
                attachments: [],
            },
            user: {
                name: null,
                avatar: null,
                gravatar: null,
                avatar_preview: null,
                email: null,
                current_password: null,
                password: null,
                password_confirmation: null,
            },
            departmentList: [],
        }
    },
    mounted() {
        this.getDepartments();
        this.getUser();
    },
    methods: {
        getDepartments() {
            const self = this;
            self.loading.form = true;
            axios.get('api/tickets/departments').then(function (response) {
                self.departmentList = response.data;
                self.loading.form = false;
            }).catch(function () {
                self.loading.form = false;
            });
        },
        saveTicket() {
            const self = this;
            self.loading.form = true;
            axios.post('api/tickets', self.ticket).then(function (response) {
                self.$notify({
                    title: self.$i18n.t('Success').toString(),
                    text: self.$i18n.t('Data saved correctly').toString(),
                    type: 'success'
                });
                self.$router.push('/tickets/' + response.data.ticket.uuid);
            }).catch(function () {
                self.loading.form = false;
            });
        },
        selectUploadFile() {
            if (!this.loading.file) {
                this.$refs.fileInput.click();
            } else {
                this.$notify({
                    title: this.$i18n.t('Error').toString(),
                    text: this.$i18n.t('A file is being uploaded').toString(),
                    type: 'warning'
                });
            }
        },
        uploadFile(e) {
            const self = this;
            const formData = new FormData();
            self.loading.file = true;
            formData.append('file', e.target.files[0]);
            axios.post(
                'api/tickets/attachments',
                formData,
                {
                    headers: {'Content-Type': 'multipart/form-data'},
                    onUploadProgress: function (progressEvent) {
                        self.uploadingFileProgress = Math.round((progressEvent.loaded / progressEvent.total) * 100);
                    }.bind(this)
                }
            ).then(function (response) {
                self.loading.file = false;
                self.uploadingFileProgress = 0;
                self.$refs.fileInput.value = null;
                self.ticket.attachments.push(response.data);
            }).catch(function () {
                self.loading.file = false;
                self.uploadingFileProgress = 0;
                self.$refs.fileInput.value = null;
            });
        },
        removeAttachment(attachment) {
            this.ticket.attachments.splice(attachment, 1);
        },
        getUser() {
            const self = this;
            self.loading.details = true;
            axios.get('api/auth/user').then(function (response) {
                self.loading.details = false;
                self.user.name = response.data.name;
                self.user.email = response.data.email;
                self.user.department_id=response.data.department_id;
                self.user.avatar = response.data.avatar;
                self.user.gravatar = response.data.gravatar;
                self.user.avatar_preview = response.data.avatar;
            }).catch(function () {
                self.loading.details = false;
            });
        },
    }
}
</script>
