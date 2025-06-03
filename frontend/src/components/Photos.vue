<template>
  <div class="container-fluid tm-container-content tm-mt-60">
    <div class="row mb-4">
      <h2 class="col-6 tm-text-primary">Latest Photos</h2>
    </div>
    <div class="row tm-mb-90 tm-gallery">
      <div v-for="photo in photos" class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
        <figure class="effect-ming tm-video-item">
          <img src="../assets/img/img-03.jpg" alt="Image" class="img-fluid" />
          <figcaption class="d-flex align-items-center justify-content-center">
            <h2>{{ photo.title }}</h2>
            <a href="photo-detail.html">View more</a>
          </figcaption>
        </figure>
        <div class="d-flex justify-content-between tm-text-gray">
          <span class="tm-text-gray-light">{{ formatDate(photo.created_at) }}</span>
          <span>9,906 views</span>
        </div>
      </div>
    </div>
    <!-- row -->
    <div class="row tm-mb-90">
      <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
        <a href="javascript:void(0);" class="btn btn-primary tm-btn-prev mb-2 disabled">Previous</a>
        <div class="tm-paging d-flex">
          <a href="javascript:void(0);" class="active tm-paging-link">1</a>
          <a href="javascript:void(0);" class="tm-paging-link">2</a>
          <a href="javascript:void(0);" class="tm-paging-link">3</a>
          <a href="javascript:void(0);" class="tm-paging-link">4</a>
        </div>
        <a href="javascript:void(0);" class="btn btn-primary tm-btn-next">Next Page</a>
      </div>
    </div>
  </div>
</template>

<script setup>
import axios from 'axios'
import { ref, onMounted } from 'vue'

const photos = ref([])

onMounted(async () => {
  try {
    const response = await axios.get('http://127.0.0.1:8000/api/photos')
    photos.value = response.data.slice(0, 16) // Get the first 16 photos
    console.log('Fetched photos:', photos.value)
  } catch (error) {
    console.error('Error fetching photos:', error)
  }
})

const formatDate = (date) => {
  return new Intl.DateTimeFormat('en-GB', {
    day: '2-digit',
    month: 'short',
    year: 'numeric',
  }).format(new Date(date))
}
</script>
