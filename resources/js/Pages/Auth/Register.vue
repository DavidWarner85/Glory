<script setup>
import {useForm} from "@inertiajs/vue3";

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
});

const submit = () =>{
    form.post(route('register'), {
        onError: ()=>form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head :title="$page.component" />

    <h1>Register a new account</h1>

    <div>
        <form @submit.prevent="submit">
            <div>
                <label>Name</label>
                <input type="text" v-model="form.name" />
                <small>{{ form.errors.name }}</small>
            </div>
            <div>
                <label>Email</label>
                <input type="text" v-model="form.email" />
                <small>{{ form.errors.email }}</small>
            </div>
            <div>
                <label>Password</label>
                <input type="password" v-model="form.password" />
                <small>{{ form.errors.password }}</small>
            </div>
            <div>
                <label>Confirm Password</label>
                <input type="password" v-model="form.password_confirmation" />
            </div>
            <div>
                <p>Already a user?<a href="route('login')">Login</a></p>
                <button>Register</button>
            </div>
        </form>
    </div>
</template>