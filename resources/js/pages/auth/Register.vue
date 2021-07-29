<template>
  <div class="flex justify-center">
    <div v-if="isloading" class="fixed top-0 right-0 left-0 bottom-0 w-full h-full bg-white opacity-80"></div>
    <div class="w-8/12 bg-white p-6 rounded-lg">
      <form action="#" @submit.prevent="sign">
        <div>
          <label for="email">Email address</label>
          <input type="text" name="email" id="email" v-model="form.email" />
        </div>

        <div>
          <label for="email">اختر الولاية</label>

         <select  name="" id="" v-model="wilaya_id" @change="getDairasPerWilaya(wilaya_id)" >
             <option value="0" disabled>اختر الولاية</option>
             <option v-for="(wilaya, index) in wilayas" :key="index" :value="wilaya.id">{{ wilaya.name_ar }}</option>
         </select>
        </div>


          <div>
        <label for="email">اختر الدائرة</label>
         <select name="" id="" v-model="daira_id" @change="getCommunesPerDaira(daira_id)" >
             <option value="0" disabled>اختر الدائرة</option>
             
             <option v-for="(daira, index) in dairas" :key="index" :value="daira.id">{{ daira.name_ar }}</option>
         </select>
        </div>

          <div>
        <label for="email">اختر البلدية</label>
         <select name="" id="" v-model="commune_id" @change="getCommunesPerDaira(daira_id)" >
             <option value="0" disabled>اختر البلدية</option>
             
             <option v-for="(commune, index) in communes" :key="index" :value="commune.id">{{ commune.name_ar }}</option>
         </select>
        </div>

        <div>
          <label for="password">Password</label>
          <input
            type="text"
            name="password"
            id="password"
            v-model="form.password"
          />
        </div>
        <div>
          <button type="submit">Sign in</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  metaInfo: {
    title: "التسجيل",
  },
  data() {
    return {
      isloading : false,
      form: {
        email: "",
        password: "",
      },
      wilayas: [],
      dairas: [],
      communes: [],
      wilaya_id: 0,
      daira_id: 0,
      commune_id:0
    };
  },
  mounted() {
    this.getAllWilayas();
  },
  methods: {
    getAllWilayas() {
      this.isloading = true
      axios.get("wialyas/all").then((res) => {
        this.wilayas = res.data;
        this.isloading = false
      });
    },

    getDairasPerWilaya(wilayaId) {
      this.isloading = true
      axios.get("dairas/perWilaya/"+ wilayaId).then((res) => {
        this.dairas = res.data;
        this.isloading = false
      });
    },

    getCommunesPerDaira(dairaId){
      axios.get("communes/perDaira/"+ dairaId).then((res) => {
        this.communes = res.data;
      });      
    }
  },
};
</script>

<style></style>
