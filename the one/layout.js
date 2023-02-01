import react from React
import "../index.php"
import { Link, Outlet } from 'react-router-dom';

function Layout() {
    return (
        <>
<div className= "valider">
    


  <div> <Link exact to='valider' className='link'>valider</Link></div>
  

      </div> 

      <Outlet/>
        </>
    )
}

export default Layout
