<template>
      <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <h1>الرئيسية</h1>
                       <form action="#" @submit.prevent="logout">
    <div>
      <button type="submit">
        Sign out
      </button>
    </div>
  </form>
        </div>
    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';

export default {
    metaInfo: {
        title: 'الرئيسية'
    },
    methods: {
...mapActions({
        logout: 'auth/signOut',
      }),

      async logout () {
        await this.logout()

        this.$router.replace({ name: 'Login' })
      }
  },
}
</script>

<style>

</style>