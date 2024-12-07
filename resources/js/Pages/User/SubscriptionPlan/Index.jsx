import Authenticated from "@/Layouts/Authenticated/Index"
import SubscriptionCard from "@/Components/SubscriptionCard"

export default function Index({auth, subcriptionPlan}) {
    return (
        <Authenticated auth={auth}>
            <div className="py-20 flex flex-col items-center">
                <div className="text-black font-semibold text-[26px] mb-3">
                    Pricing for Everyone
                </div>
                <p className="text-base text-gray-1 leading-7 max-w-[302px] text-center">
                    Invest your little money to get a whole new experiences from movies.
                </p>
                <div className="flex justify-center gap-10 mt-[70px]">
                    { subcriptionPlan?.map((subs,index) => (
                        <SubscriptionCard 
                            name={subs.name}
                            price={subs.price}
                            durationInMonth={subs.active_period_in_months}
                            features={JSON.parse(subs.features)}
                            isPremium={subs.name === 'Premium'}
                            key={`subs${index}`}
                        />
                    )) }
                </div>
            </div>
        </Authenticated>
    )
}