<script setup>
import {useForm} from "@inertiajs/vue3";

const form = useForm({
    email: null,
    password: null,
    remember: null
});

const submit = () =>{
    form.post(route('login'), {
        onError: ()=>form.reset('password'),
    });
};
</script>

<template>
    <Head :title="$page.component" />

    <h1>Login to your account</h1>

    <div>
        <form @submit.prevent="submit">
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
                <div>
                    <label for="remember">Remember me</label>
                    <input type="checkbox" v-model="form.remember" id="remember">
                </div>
                    <p>Need an account?<a href="route('register')">Register</a> </p>
            </div>
            <div>
                <button>Login</button>
            </div>
        </form>
    </div>
</template>