<template>
    <div class="container h-100 d-flex">
        <div class="p-4 bg-white overflow-hidden shadow rounded main-card">
            <div class="row justify-content-center">
                <div class="col-12">
                    <label for="exampleInputEmail1" class="form-label">
                        <p class="font-weight-bold h1">PIN</p>
                    </label>
                </div>
                <div class="col-8 mr-auto mb-3">
                    <input type="email" class="form-control" v-model="pin" />
                    <div id="emailHelp" class="form-text">
                        please press on Generate button to get your PIN.
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" @click="generatePin">
                        Generate
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
// import axios from "axios";

export default {
    name: "PinGenerator",

    data() {
        return {
            pin: "",
        };
    },

    methods: {
        generatePin() {
            axios.get("pin").then((res) => {
                this.pin = res.data;
            });
        },
    },
};
</script>
