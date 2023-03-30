import {createBrowserRouter} from 'react-router-dom'
import Home from "./views/Home.jsx";
import Dashboard from "./views/Dashboard.jsx";
import NotFound from "./views/NotFound.jsx";
import GuestLayout from "./components/GuestLayout.jsx";
import UserLayout from "./components/UserLayout.jsx";

const router = createBrowserRouter([
  {
    path: '/',
    element: <GuestLayout />,
    children: [
      {
        path: '/',
        element: <Home />
      },
    ]
  },
  {
    path: '/',
    element: <UserLayout />,
    children: [
      {
        path: '/portal',
        element: <Dashboard />
      },
    ]
  },
  {
    path: '*',
    element: <NotFound />
  }
])

export default router
