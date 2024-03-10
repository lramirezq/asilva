import{x as z,y as L,g,C as b,o as h,c as v,d as e,k as c,h as m,z as _,a,w as o,n as f,A as $,j as C,u as M,i as x,t as B,b as u,r as k,F as H,G as j}from"./app-BSbaFlim.js";import{_ as V}from"./_plugin-vue_export-helper-DlAUqK2U.js";const T={class:"relative"},N={class:"absolute right-0 z-10 mt-2 w-48 overflow-hidden rounded-md bg-white shadow-xl"},D={__name:"Dropdown",props:{align:{default:"right"},width:{default:"48"},contentClasses:{default:()=>["py-1","bg-white"]}},setup(s){const t=s,n=l=>{i.value&&l.key==="Escape"&&(i.value=!1)};z(()=>document.addEventListener("keydown",n)),L(()=>document.removeEventListener("keydown",n));const r=g(()=>({48:"w-48"})[t.width.toString()]),w=g(()=>t.align==="left"?"origin-top-left left-0":t.align==="right"?"origin-top-right right-0":"origin-top"),i=b(!1);return(l,d)=>(h(),v("div",T,[e("div",{onClick:d[0]||(d[0]=p=>i.value=!i.value)},[c(l.$slots,"trigger")]),m(e("div",{class:"fixed inset-0 z-40",onClick:d[1]||(d[1]=p=>i.value=!1)},null,512),[[_,i.value]]),a($,{"enter-active-class":"transition duration-200 ease-out","enter-from-class":"scale-95 transform opacity-0","enter-to-class":"scale-100 transform opacity-100","leave-active-class":"transition duration-75 ease-in","leave-from-class":"scale-100 transform opacity-100","leave-to-class":"scale-95 transform opacity-0"},{default:o(()=>[m(e("div",{class:f(["absolute z-50 mt-2 rounded-md shadow-lg",[r.value,w.value]]),style:{display:"none"},onClick:d[2]||(d[2]=p=>i.value=!1)},[e("div",N,[c(l.$slots,"content")])],2),[[_,i.value]])]),_:3})]))}},y={__name:"DropdownLink",setup(s){return(t,n)=>(h(),C(M(x),{class:"block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white"},{default:o(()=>[c(t.$slots,"default")]),_:3}))}},E={class:"flex items-center justify-between border-b-4 border-indigo-600 bg-white px-6 py-4"},F={class:"flex items-center"},S=e("svg",{class:"h-6 w-6",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg"},[e("path",{d:"M4 6H20M4 12H20M4 18H11",stroke:"currentColor","stroke-width":"2","stroke-linecap":"round","stroke-linejoin":"round"})],-1),A=[S],O={class:"flex items-center"},U={__name:"Header",setup(s){return(t,n)=>(h(),v("header",E,[e("div",F,[e("button",{onClick:n[0]||(n[0]=r=>t.$page.props.showingMobileMenu=!t.$page.props.showingMobileMenu),class:"text-gray-500 focus:outline-none lg:hidden"},A)]),e("div",O,[a(D,null,{trigger:o(()=>[e("button",{onClick:n[1]||(n[1]=r=>t.dropdownOpen=!t.dropdownOpen),class:"relative block overflow-hidden"},B(t.$page.props.auth.user.name),1)]),content:o(()=>[a(y,{href:t.route("profile.edit")},{default:o(()=>[u(" Profile ")]),_:1},8,["href"]),a(y,{class:"w-full text-left",href:t.route("logout"),method:"post",as:"button"},{default:o(()=>[u(" Log out ")]),_:1},8,["href"])]),_:1})])]))}},Z={class:"mx-3"},G={__name:"NavLink",props:["href","active"],setup(s){const t=s,n=g(()=>t.active?"flex items-center mt-4 py-2 px-6 bg-gray-700 bg-opacity-25 text-gray-100":"flex items-center mt-4 py-2 px-6 text-gray-100");return(r,w)=>(h(),C(M(x),{href:s.href,class:f(n.value)},{default:o(()=>[c(r.$slots,"icon"),e("span",Z,[c(r.$slots,"default")])]),_:3},8,["href","class"]))}},P={components:{NavLink:G,Link:x},setup(){return{showingTwoLevelMenu:b(!1)}}},q=j('<div class="flex justify-center items-center mt-8"><div class="flex items-center"><svg class="w-12 h-12" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z" fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z" fill="white"></path></svg><span class="mx-2 text-2xl font-semibold text-white">Dashboard</span></div></div>',1),I={class:"mt-10","x-data":"{ isMultiLevelMenuOpen: false }"},J=e("svg",{class:"w-6 h-6",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24",stroke:"currentColor"},[e("path",{"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"}),e("path",{"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"})],-1),K=e("svg",{class:"w-5 h-5",fill:"none",stroke:"currentColor",viewBox:"0 0 24 24",xmlns:"http://www.w3.org/2000/svg"},[e("path",{"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"})],-1),Q=e("svg",{class:"w-5 h-5","aria-hidden":"true",fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",viewBox:"0 0 24 24",stroke:"currentColor"},[e("path",{d:"M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"})],-1),R=e("svg",{class:"w-6 h-6",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24",stroke:"currentColor"},[e("path",{"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z"})],-1),W=e("span",{class:"mx-3"},"Two-level menu",-1),X=[R,W],Y={class:"overflow-hidden p-2 mx-4 mt-2 space-y-2 text-sm font-medium text-white bg-gray-700 bg-opacity-50 rounded-md shadow-inner","aria-label":"submenu"},ee={class:"px-2 py-1 transition-colors duration-150"};function te(s,t,n,r,w,i){const l=k("nav-link"),d=k("Link");return h(),v(H,null,[e("div",{class:f([s.$page.props.showingMobileMenu?"block":"hidden","fixed inset-0 z-20 bg-black opacity-50 transition-opacity lg:hidden"]),onClick:t[0]||(t[0]=p=>s.$page.props.showingMobileMenu=!1)},null,2),e("div",{class:f([s.$page.props.showingMobileMenu?"translate-x-0 ease-out":"-translate-x-full ease-in","overflow-y-auto fixed inset-y-0 left-0 z-30 w-64 bg-gray-900 transition duration-300 transform lg:translate-x-0 lg:static lg:inset-0"])},[q,e("nav",I,[a(l,{href:s.route("dashboard"),active:s.route().current("dashboard")},{icon:o(()=>[J]),default:o(()=>[u(" Dashboard ")]),_:1},8,["href","active"]),a(l,{href:s.route("users.index"),active:s.route().current("users.index")},{icon:o(()=>[K]),default:o(()=>[u(" Users ")]),_:1},8,["href","active"]),a(l,{href:s.route("facturas.index"),active:s.route().current("facturas.index")},{icon:o(()=>[Q]),default:o(()=>[u(" Facturas ")]),_:1},8,["href","active"]),e("a",{class:"flex items-center mt-4 py-2 px-6 text-gray-100",href:"#",onClick:t[1]||(t[1]=p=>r.showingTwoLevelMenu=!r.showingTwoLevelMenu)},X),a($,{"enter-to-class":"transition-all duration-300 ease-in-out","enter-from-class":"max-h-0 opacity-25","leave-from-class":"opacity-100 max-h-xl","leave-to-class":"max-h-0 opacity-0"},{default:o(()=>[m(e("div",null,[e("ul",Y,[e("li",ee,[a(d,{class:"w-full",href:s.route("dashboard")},{default:o(()=>[u("Child menu")]),_:1},8,["href"])])])],512),[[_,r.showingTwoLevelMenu]])]),_:1})])],2)],64)}const se=V(P,[["render",te]]),oe={class:"flex h-screen bg-gray-200 font-roboto"},ne={class:"flex flex-1 flex-col overflow-hidden"},ae={class:"flex-1 overflow-y-auto overflow-x-hidden bg-gray-200"},re={class:"container mx-auto px-6 py-8"},ie={class:"mb-4 text-3xl font-medium text-gray-700"},ce={__name:"AuthenticatedLayout",setup(s){return(t,n)=>(h(),v("div",oe,[a(se),e("div",ne,[a(U),e("main",ae,[e("div",re,[e("h3",ie,[c(t.$slots,"header")]),c(t.$slots,"default")])])])]))}};export{ce as _};
