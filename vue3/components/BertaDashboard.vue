<template>
  <div>
    <notifications width="100%" />
    <Searchbar
      :tabs="tabsstored"
      @filteredTabs="updateFilteredTabs"
    />
    <div class="overflow-tabs-container">
      <div>
        <div
          v-if="tabs.length > 0"
          class="nav nav-tabs"
        >
          <div
            v-for="tab in tabs"
            :key="tab.id"
            class="nav-item"
          >
            <a
              :class="['nav-link', { 'active': activeTab === tab.id }]"
              @click="changeTab(tab.id)"
            >
              {{ tab.name }}
            </a>
          </div>
        </div>
        <div v-else>
          <div class="nav nav-tabs">
            <SkeletonTab
              v-for="index in 3"
              :key="index"
            />
          </div>
        </div>
      </div>
    </div>
    <transition
      name="fade"
      mode="out-in"
    >
      <div
        v-if="content"
        class="content-container"
      >
        <p
          v-if="content.name"
          class="mb-0"
        >
          <strong>Name: (LOKALIZE!)</strong> {{ content.name }}
        </p>
        <p
          v-if="content.coursecount"
          class="mb-0"
        >
          <strong>Course Count: (LOKALIZE!)</strong> {{ content.coursecount }}
        </p>
        <p
          v-if="content.path"
          class="mb-0"
        >
          <strong>Path: (LOKALIZE!)</strong> {{ content.path }}
        </p>
        <p
          class="mb-0"
        >
          <a href="/course/editcategory.php?parent=0">
            Create new OE (LOKALIZE!)
          </a>
        </p>
        <p
          v-if="content.contextid"
          class="mb-0"
        >
          <a :href="'/admin/roles/assign.php?contextid=' + content.contextid">
            Assign Roles (LOKALIZE!)
          </a>
        </p>

        <BookingStats :bookingstats="content" />
        <CapabilityButtons @capabilityClicked="handleCapabilityClicked" />
        <CapabilityOptions :selectedcapability="selectedCapability" />
      </div>
      <div
        v-else
        class="content-container"
      >
        <SkeletonContent />
      </div>
    </transition>
  </div>
</template>

<script setup>
  import { ref, onMounted, watch } from 'vue'
  import Searchbar from '../components/FilterSearchbar.vue'
  import { useStore } from 'vuex'
  import SkeletonTab from '../components/helper/SkeletonTab.vue';
  import SkeletonContent from '../components/helper/SkeletonContent.vue';
  import CapabilityButtons from '../components/helper/CapabilityButtons.vue';
  import CapabilityOptions from '../components/helper/CapabilityOptions.vue';
  import BookingStats from '../components/dashboard/BookingStats.vue';

  const content = ref();
  const store = useStore();
  const tabsstored = ref([]);
  const tabs = ref([]);
  const activeTab = ref(0);
  const selectedCapability = ref(null);

  // Trigger web services on mount
  onMounted(() => {
    store.dispatch('fetchTab', 0);
    tabsstored.value = store.state.tabs
    tabs.value = store.state.tabs
    content.value = store.state.content
  });

  watch(() => store.state.tabs, async () => {
    tabsstored.value = store.state.tabs
    tabs.value = store.state.tabs
  }, { deep: true } );

  watch(() => store.state.content, async () => {
    content.value = store.state.content

  }, { deep: true } );

  function changeTab(index) {
    activeTab.value = index;
    store.dispatch('fetchTab', index);
  }

  const updateFilteredTabs = (filteredTabsFromSearchbar) => {
    tabs.value = filteredTabsFromSearchbar;
  }

  const handleCapabilityClicked = (capability) => {
    selectedCapability.value = capability
  }
</script>

<style scoped>

.fade-enter-active, .fade-leave-active {
  transition: all 0.5s ease;
}

.fade-enter-from, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
  opacity: 0;
  transform: translateX(30px);
}
.overflow-tabs-container {
  overflow-x: auto;
  white-space: nowrap;
}

.nav-item{
  margin-right: 2px;
}
.nav-tabs {
  display: flex !important;
  flex-wrap: nowrap !important;
  border-bottom: 1px solid #e0e0e0; /* Light gray bottom border */
}

.nav-link {
  background-color: #bdb5b5; /* White background */
  padding: 0.5rem 1rem;
  color: #555555c7; /* Dark gray text color */
}

.nav-link.active {
  background-color: #528cef; /* Blue background for active tab */
  color: #fff; /* White text color for active tab */
}

.content-container {
  width: 100%;
  background: #f5f5f5; /* Light gray background for content */
  min-height: 300px;
  border-bottom-left-radius: 3rem;
  border-bottom-right-radius: 3rem;
  padding: 1rem;
}
</style>