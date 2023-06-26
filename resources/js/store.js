import { reactive } from "vue";

export const store = reactive({
  apiEndPoint: 'http://127.0.0.1:8000/api/projects',
  apiResult: null,
  imgPath : null
});
