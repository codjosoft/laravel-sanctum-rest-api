<template>
  <app-layout title="Dashboard">
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="text">
            <h1>AUTOTEXTING DEVICES ITEMS</h1>
          </div>
          <div class="container">
            <table class="table">
              <thead>
                <th>Name</th>
                <th>Prices</th>
                <th>Description</th>
                <th>Slug</th>
                <th>Action</th>
              </thead>
              <tbody>
                    <!-- v-for="item in items" -->
                    v-for="item in items"
                    :key="item.id"
                    :class="{'bg-white': item.id === selectedItem}"
                    :style="{'text-align': 'center'}"
                    :id="item.id"
                    :data-id="item.id"
                    :data-name="item.name"
                    :data-price="item.price"
                    :data-description="item.description"
                    :data-slug="item.slug"
                    :data-action="item.action"
                    

                <tr>
                  <td data-label="Name">Dinesh</td>
                  <td data-label="Age">34</td>
                  <td data-label="Marks%">50%</td>
                  <td data-label="Staus">Passed</td>
                  <td data-label="Staus">
                    <!-- tailwind css button -->
                    <button
                      class="
                        bg-blue-500
                        hover:bg-blue-400
                        text-white
                        font-bold
                        py-2
                        px-4
                        border-b-4 border-blue-700
                        hover:border-blue-500
                        rounded
                      "
                    >
                      Button
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";

export default {
  components: {
    AppLayout,
  },
};
</script>

<style scoped>
.text {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: auto;
  margin-top: 2rem;
  font-size: 2.3rem;
  font-weight: bold;
  padding: 1rem;
  color: rgb(6, 77, 77);
}
.container {
  width: 700px;
  height: 30vh;
  border-radius: 18px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: auto;
}
.table {
  width: 100%;
  border-collapse: collapse;
}

.table td,
.table th {
  padding: 12px 15px;
  border: 1px solid #ddd;
  text-align: center;
  font-size: 16px;
}

.table th {
  /* background-color: darkblue; */
  background-color: rgb(6, 77, 77);

  color: #ffffff;
}

.table tbody tr:nth-child(even) {
  background-color: #f5f5f5;
}

/*responsive*/

@media (max-width: 500px) {
  .table thead {
    display: none;
  }

  .table,
  .table tbody,
  .table tr,
  .table td {
    display: block;
    width: 100%;
  }
  .table tr {
    margin-bottom: 15px;
  }
  .table td {
    text-align: right;
    padding-left: 50%;
    text-align: right;
    position: relative;
  }
  .table td::before {
    content: attr(data-label);
    position: absolute;
    left: 0;
    width: 50%;
    padding-left: 15px;
    font-size: 15px;
    font-weight: bold;
    text-align: left;
  }
}
</style>