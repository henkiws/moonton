import InputError from '@/Components/InputError';
import InputLabel from "@/Components/InputLabel"
import TextInput from "@/Components/TextInput"
import Button from "@/Components/Button"
import { Link, Head, useForm } from "@inertiajs/react"

export default function Register() {
    const { data, setData, post, processing, errors, reset } = useForm({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
    });

    const submit = (e) => {
        e.preventDefault();

        post(route('register'), {
            onFinish: () => reset('password', 'password_confirmation'),
        });
    };
    
    return (
        <>
            <Head title="Sign Up"/>
            <div className="mx-auto max-w-screen min-h-screen bg-black text-white md:px-10 px-3">
                <div className="fixed top-[-50px] hidden lg:block">
                    <img src="/images/signup-image.png" className="hidden laptopLg:block laptopLg:max-w-[450px] laptopXl:max-w-[640px]" alt=""/>
                </div>
                <div className="py-24 flex laptopLg:ml-[680px] laptopXl:ml-[870px]">
                    <div>
                        <img src="/images/moonton-white.svg" alt=""/>
                        <div className="my-[70px]">
                            <div className="font-semibold text-[26px] mb-3">
                                Sign Up
                            </div>
                            <p className="text-base text-[#767676] leading-7">
                                Explore our new movies and get
                                the better insight for your life
                            </p>
                        </div>
                        <form className="w-[370px]" onSubmit={submit}>
                            <div className="flex flex-col gap-6">
                                <div>
                                    <InputLabel value="Fullname"/>
                                    <TextInput 
                                            type="text"
                                            name="name"
                                            placeholder="Fullname" 
                                            value={data.name}
                                            onChange={(e) => setData('name', e.target.value)}
                                            required
                                        />
                                    <InputError message={errors.name} className="mt-2" />
                                </div>
                                <div>
                                    <InputLabel value="Email Address"/>
                                    <TextInput 
                                            type="email"
                                            name="email"
                                            value={data.email}
                                            placeholder="Email" 
                                            onChange={(e) => setData('email', e.target.value)}
                                            required
                                        />
                                    <InputError message={errors.email} className="mt-2" />
                                </div>
                                <div>
                                    <InputLabel value="Password"/>
                                    <TextInput 
                                            type="password"
                                            name="password"
                                            value={data.password}
                                            placeholder="Password" 
                                            onChange={(e) => setData('password', e.target.value)}
                                            required
                                        />
                                    <InputError message={errors.password} className="mt-2" />
                                </div>
                                <div>
                                    <InputLabel value="Password Confirmation"/>
                                    <TextInput 
                                            type="password"
                                            name="password_confirmation"
                                            value={data.password_confirmation}
                                            placeholder="Password Confirmation" 
                                            onChange={(e) => setData('password_confirmation', e.target.value)}
                                            required
                                        />
                                    <InputError message={errors.password_confirmation} className="mt-2" />
                                </div>
                            </div>
                            <div className="grid space-y-[14px] mt-[30px]">
                                <Button
                                    type='submit'
                                    className="bg-alerange"
                                    processing={processing}
                                >
                                    <span className="text-base font-semibold">
                                        Sign Up
                                    </span>
                                </Button>
                                <Link href={route('prototype.login')}>
                                    <Button
                                        type='button'
                                        className="border border-white"
                                    >
                                        <span className="text-base text-white">
                                            Sign In to My Account
                                        </span>
                                    </Button>
                                </Link>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </>
    )
}