<script setup>

</script>

<template>
    <div>
        <header>
            <nav>
                <div>
                    <Link :href="route('home')" preserve-scroll>Home</Link>
                    <Link :href="route('narrators')" preserve-scroll>Narrator's Guide</Link>
                </div>
                <div v-if="$page.props.auth.user">
                    <Link :href="route('logout')" method="post" as="button" type="button">Logout</Link>
                </div>
                <div v-else>
                    <Link :href="route('register')">Register</Link>
                    <Link :href="route('login')">Login</Link>
                </div>
            </nav>
        </header>

        <main>
            <slot />
        </main>
    </div>
</template>