
  const { createApp } = Vue;

  createApp({
    data() {
      return {
        disks: [],
        selectedDisk: null,
      }
    },
    created() {
        axios.get('api/disks.php')
        .then(response => {
            this.disks = response.data;
        })
        .catch(error => {
            console.error(error);
        });
    },
    methods: {
        selectDisk(disk) {
            this.selectedDisk = disk;
        }
    }
  }).mount('#app')
