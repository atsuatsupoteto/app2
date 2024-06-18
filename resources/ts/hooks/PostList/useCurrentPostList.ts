//useGetPostListで取得したデータを利用するhook

import { useQueryClient } from "react-query";

const useCurrentPostList = () => {
    const queryClient = useQueryClient();
    return queryClient.getQueryData("postList");
};

export default useCurrentPostList;
